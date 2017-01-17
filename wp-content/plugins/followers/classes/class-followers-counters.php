<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
[0] => facebook
[1] => twitter
[2] => google-plus
[3] => behance
[4] => instagram
[5] => dribbble
[6] => linkedin
[7] => github
[8] => youtube
[9] => pinterest )
*/


class FollowersCounters  {

    public static function facebook_counter() {

        #check if storred in cache?
        $count = get_transient('followers_fb_count');
        if ($count !== false) return $count;

        #not stored, so get it
        $options = get_option('followers-apis');
        if(isset($options['facebook_id'])) {
            $fb_id = $options['facebook_id'];
            $count = 0;

            $data = wp_remote_get('http://api.facebook.com/restserver.php?method=facebook.fql.query&query=SELECT%20fan_count%20FROM%20page%20WHERE%20page_id='.$fb_id.'');

            if (is_wp_error($data)) {
                return 'Error';
            }else{
                $count = strip_tags($data['body']);
            }
            set_transient('followers_fb_count', $count, 60*60*24); // 24 hour cache
            return $count;
        }

    }

    public static function twitter_counter() {
        $count = get_transient('followers_twitter_count');
        if ($count !== false) return $count;

        $options = get_option('followers-apis');
        if(isset($options['twitter_user'])) {
            $user = $options['twitter_user'];
            $count = 0;
            $data = wp_remote_get('http://query.yahooapis.com/v1/public/yql?q=SELECT%20*%20from%20html%20where%20url=%22http://twitter.com/'.$user.'%22%20AND%20xpath=%22//li[contains(@class,%27ProfileNav-item--followers%27)]/a/span[@class=%27ProfileNav-value%27]%22&format=json');
            if (is_wp_error($data)) {
                return 'Error';
            } else {
                $data = json_decode($data['body']); // Decoding the obtained JSON data

            }
            $count = intval($data->query->results->span->content);
            set_transient('followers_twitter_count', $count, 60*60*24); // 24 hour cache
            return $count;
        }
    }

    public static function google_plus_counter() {
        // get api https://code.google.com/apis/console?hl=en#access
        $count = get_transient('followers_google_plus_count');
        if ($count !== false) return $count;

        $options = get_option('followers-apis');
        if(isset($options['google_api_key'])) {
            $google_api_key = $options['google_api_key']; //'';
            $page_id = $options['google_page_id'];  //';
            $data = wp_remote_get("https://www.googleapis.com/plus/v1/people/$page_id?key=$google_api_key");
             if (is_wp_error($data)) {
                return 'Error';
            } else {
                $data = json_decode($data['body']);
            }
            $count = intval($data->plusOneCount);
            set_transient('followers_google_plus_count', $count, 60*60*24); // 24 hour cache
            return $count;
        }
    }


    public static function behance_counter() {
        $count = get_transient('followers_behance_count');
        if ($count !== false) return $count;

        $options = get_option('followers-apis');
        if(isset($options['behance_api_key'])) {  //
            $data = wp_remote_get('https://www.behance.net/v2/users/'.$options['behance_username'].'?api_key='.$options['behance_api_key']);
             if (is_wp_error($data)) {
                return 'Error';
            } else {
                $data = json_decode($data['body']);
            }
            $count = intval($data->user->stats->followers);
            set_transient('followers_behance_count', $count, 60*60*24); // 24 hour cache
            return $count;
        }
    }

    public static function instagram_counter() {
        $count = get_transient('followers_instagram_count');
        if ($count !== false) return $count;
        //access token
        // user id
        $options = get_option('followers-apis');
        if(isset($options['instagram_api_key'])) {
            $data = wp_remote_get("https://api.instagram.com/v1/users/".$options['instagram_user_name']."?access_token=".$options['instagram_api_key']);
             if (is_wp_error($data)) {
                return 'Error';
            } else {
                $data = json_decode($data['body']);
            }
            $count = intval($data->data->counts->followed_by);
            set_transient('followers_instagram_count', $count, 60*60*24); // 24 hour cache
            return $count;
        }
    }
    public static function dribbble_counter() {
        $count = get_transient('followers_dribbble_count');
        if ($count !== false) return $count;

        $options = get_option('followers-apis');
        if(isset($options['dribbble_username'])) {
            $data = wp_remote_get("http://api.dribbble.com/players/".$options['dribbble_username']);
             if (is_wp_error($data)) {
                return 'Error';
            } else {
                $data = json_decode($data['body']);
            }
            $count = intval($data->followers_count);
            set_transient('followers_dribbble_count', $count, 60*60*24); // 24 hour cache
            return $count;
        }
    }
    public static function linkedin_counter() {
        $count = get_transient('followers_linkedin_count');
        if ($count !== false) return $count;

        $options = get_option('followers-apis');
        if(isset($options['linkedin_link'])) {
            $data = wp_remote_get("http://www.linkedin.com/countserv/count/share?url=".$options['linkedin_link']."&format=json");
             if (is_wp_error($data)) {
                return 'Error';
            } else {
                $data = json_decode($data['body']);
            }
            $count = intval($data->count);
            set_transient('followers_linkedin_count', $count, 60*60*24); // 24 hour cache
            return $count;
        }
    }
    public static function github_counter() {
        $count = get_transient('followers_github_count');
        if ($count !== false) return $count;

        $options = get_option('followers-apis');
        if(isset($options['github_username'])) {
            $data = wp_remote_get("https://api.github.com/users/".$options['github_username']);
             if (is_wp_error($data)) {
                return 'Error';
            } else {
                $data = json_decode($data['body']);
            }
            $count = intval($data->followers);
            set_transient('followers_github_count', $count, 60*60*24); // 24 hour cache
            return $count;
        }
    }
    public static function youtube_counter() {
        /*$count = get_transient('followers_youtube_count');
        if ($count !== false) return $count;*/

        $options = get_option('followers-apis');
        if(isset($options['youtube_username'])) {
            $data = wp_remote_get("http://gdata.youtube.com/feeds/api/users/".$options['youtube_username']."?alt=json");
            if (is_wp_error($data)) {
                return 'Error';
            } else {
                //var_dump($data);
                $data = wp_remote_retrieve_body($data);
                $data = json_decode($data, true);
            }
            $count = intval($data['entry']['yt$statistics']['subscriberCount']);
            set_transient('followers_youtube_count', $count, 60*60*24); // 24 hour cache
            return $count;
        }
    }


    public static function pinterest_counter() {
        $count = get_transient('followers_pinterest_count');
        if ($count !== false) return $count;

        $options = get_option('followers-apis');
        if(isset($options['pinterest_username'])) {
            $metas = get_meta_tags('http://pinterest.com/'.$options['pinterest_username']);
            $count = $metas['pinterestapp:followers'];
            set_transient('followers_pinterest_count', $count, 60*60*24); // 24 hour cache
            return $count;
        }
    }


}
