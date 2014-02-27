/////////////////////////////////////////////////////////////////////////////////////
window.addEvent('domready', function(){
	//automatic friend urls
	(function(){
		if($('friend_url')){
			$('friend_url').addEvent('focus', function(){
				var v = this.get('value');
				if(v.length==0){
					this.set('value', $('name').get('value').create_domain())
				}
			});
		}
	})();
	//# anchor smart to element
	(function(){
		$$('a[@href^="#"]').each(function(el){
			if(!$(el.href.split('#')[1])){
				return false;
			}
			el.addEvent('click', function(){
				new Fx.Scroll(window).toElement(this.href.split('#')[1]);
				return false;
			});
		});
	})();
	//translation show original text
	(function(){
		$$("span.original-text-show").each(function(el){
			var show = false;
			el.addEvent('click', function(){
				if(show)
					this.getNext().setStyle('display', 'none')
				else
					this.getNext().setStyle('display', 'block')
				show = show ? false : true;
			});
		});
	})();
	//delete confirm
	(function(){
		$$('a.delete').each(function(el){
			el.addEvent('click', function(){
				if(!confirm("<?php echo lng('Are you sure?');?>")){
					return false;
				}
			});
		});
	})();
	//textarea, wysywig
	(function(){
                var browse = '<?php echo $wwwPathAdmin;?>/design/editors/ckeditor3.2/filemanager/browser/default/browser.html?Connector=<?php echo $wwwPathAdmin;?>/design/editors/ckeditor3.2/filemanager/connectors/php/connector.php';
		$$('textarea.edit').each(function(el){
			var check = false;
			var desc = el.getPrevious().get('html');
			el.addEvent('click', function(){
				if(!check){
					check=true;
					if(confirm("<?php echo lng('Use editor for');?> "+desc+'?')){
						CKEDITOR.replace(el.get('id'),{
							'language': 'lv'
//							, EditorAreaCSS : '<?php echo $wwwPath;?>/design/css/content.css'
							, filebrowserBrowseUrl : browse
							, filebrowserImageBrowseUrl : browse+'&Type=Image'
							, filebrowserFlashBrowseUrl : browse+'&Type=Flash'
                                                        , toolbar_Full:
                                                        [
                                                            ['Source', '-', 'Preview', '-'],
                                                            ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Print'], //, 'Scayt'
                                                            ['Undo', 'Redo', '-', 'Find', 'Replace', '-', 'SelectAll', 'RemoveFormat'],
                                                            '/',
                                                            ['Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript'],
                                                            ['NumberedList', 'BulletedList', '-',  'Blockquote'],
                                                            ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
                                                            ['Link', 'Unlink', 'Anchor'],
                                                            ['Image', 'Table', 'HorizontalRule', 'SpecialChar'],
                                                            '/',
//                                                            ['Styles', 'Format', 'Templates'],
                                                            ['Maximize', 'ShowBlocks']
                                                        ]

						});
					}
				}
			});
		});
                $$('.fileChoose').each(function(el){
                    var name = el.get('rel');
                    el.addEvent('click', function(e){
                        e.stop();
                        var n = CKEDITOR.tools.addFunction(function(url){
                                $(name).set('value', url);
                        });
                        window.open(browse+'&CKEditorFuncNum='+n, "FCKBrowseWindow", "modal,width=600,height=400");
                        return false;
                    });
                });
	})();
	//textarea json translations
	(function(){
		$$('textarea.jsonTranslate').each(function(el){
			var v = JSON.decode(el.get('value'));
			try{
				var or = JSON.decode(el.getNext('.original').get('html'));
			} catch(err) {
				alert('wrong json data in original');
			};
			if(!or){
				return false;
			}
			var edit = el.get('rel').split(' ');
			or.each(function(data, i){
				edit.each(function(e){
					or[i][e] = v[i]&&v[i][e] ? v[i][e] : or[i][e];
					var c = new Element('div', {
					}).inject(el, 'before');
					new Element('label', {
						'html':e
					}).inject(c);
					new Element('textarea', {
						'value': or[i][e]
						, 'events': {
							'keyup': function(){
								or[i][e] = this.get('value');
								change();
							}
						}
					}).inject(c);
				});
			});
			var change = function(){ el.set('value', JSON.encode(or)); };
			change();
			el.setStyle('display','none');
		});
	})();
});
/////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////
function d(v){
	console.info(v);
}
/////////////////////////////
function a(v){
	alert(v);
}