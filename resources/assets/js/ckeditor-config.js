CKEDITOR.editorConfig = function( config ) {
	config.toolbar = [
          // ['Source','Preview','Templates'],
          ['Styles','Format','Font','FontSize'],
          ['TextColor','BGColor'],
          ['Maximize','ShowBlocks','Syntaxhighlight'],
          ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
          ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
          '/',
          ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
          ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
          ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
          ['BidiLtr', 'BidiRtl' ],
          ['Link','Unlink','Anchor'],
          ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe']
  	]

     // CKEDITOR.config.enterMode = CKEDITOR.ENTER_P;
     config.allowedContent = true;
     config.enterMode = CKEDITOR.ENTER_BR // pressing the ENTER KEY input <br/>
     //config.shiftEnterMode = CKEDITOR.ENTER_P; //pressing the SHIFT + ENTER KEYS input <p>
     //config.autoParagraph = false

     config.filebrowserBrowseUrl = '../../ckfinder/ckfinder.html';
 
     config.filebrowserImageBrowseUrl = '../../ckfinder/ckfinder.html?type=Images';
      
     config.filebrowserFlashBrowseUrl = '../../ckfinder/ckfinder.html?type=Flash';
      
     config.filebrowserUploadUrl = '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
      
     config.filebrowserImageUploadUrl = '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
      
     config.filebrowserFlashUploadUrl = '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};