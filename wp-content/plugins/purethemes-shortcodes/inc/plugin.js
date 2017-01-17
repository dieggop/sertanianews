(function () {
	tinymce.create("tinymce.plugins.purethemesShortcodes",{

		init : function(ed, url){

            ed.addButton('pt_button', {
            title : 'Purethemes shortcodes',
                onclick : function() {
                    tb_show("", url + "/popup.php?width=" + 600 + "&height=" + 700);
                   // tinymce.DOM.setStyle(["TB_overlay", "TB_window", "TB_load"], "z-index", "999999")
                },
                image: false,

            });
        },
		getInfo: function () {
			return {
				longname: 'Purethemes Shortcodes',
				author: 'Purethemes.net',
				authorurl: 'http://themeforest.net/user/purethemes/',
				infourl: 'http://themeforest.net/user/purethemes/',
				version: "1.0"
			}
		}
	});

	tinymce.PluginManager.add("purethemesShortcodes", tinymce.plugins.purethemesShortcodes);
})();