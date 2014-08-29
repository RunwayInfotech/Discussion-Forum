function fr() {
    Markdown.local.value = {
        bold: "Gras <strong> Ctrl+B",
        boldexample: "texte en gras",
        
        italic: "Italique <em> Ctrl+I",
        italicexample: "texte en italique",
        
        link: "Hyperlien <a> Ctrl+L",
        linkdescription: "description de l'hyperlien",
        linkdialog: "<p><b>InsÃ©rer un hyperlien</b></p><p>http://example.com/ \"titre optionnel\"</p>",
        
        quote: "Citation <blockquote> Ctrl+Q",
        quoteexample: "Citation",
        
        code: "Extrait de code <pre><code> Ctrl+K",
        codeexample: "votre extrait de code",
        
        image: "Image <img> Ctrl+G",
        imagedescription: "description de l'image",
        imagedialog: "<p><b>InsÃ©rer une image</b></p><p>http://example.com/images/diagram.jpg \"titre optionnel\"<br><br><a href='http://www.google.com/search?q=free+image+hosting' target='_blank'>Vous chercher un hÃ©bergement d'image grauit ?</a></p>",
        
        olist: "Liste numÃ©rotÃ©e <ol> Ctrl+O",
        ulist: "Liste Ã  point <ul> Ctrl+U",
        litem: "ElÃ©ment de liste",
        
        heading: "Titre <h1>/<h2> Ctrl+H",
        headingexample: "Titre",
        
        hr: "Trait horizontal <hr> Ctrl+R",
        
        undo: "Annuler - Ctrl+Z",
        redo: "Refaire - Ctrl+Y",
        redomac: "Refaire - Ctrl+Shift+Z",
        
        help: "Aide sur Markdown"
    };
}

function ar() {
    Markdown.local.value = {
        bold: "ØºÙ„ÙŠØ¸ <strong> Ctrl+B",
        boldexample: "Ù†Øµ ØºÙ„ÙŠØ¸",
        
        italic: "Ù…Ø§Ø¦Ù„ <em> Ctrl+I",
        italicexample: "Ù†Øµ Ù…Ø§Ø¦Ù„",
        
        link: "Ø±Ø§Ø¨Ø· <a> Ctrl+L",
        linkdescription: "ÙˆØµÙ Ø§Ù„Ø±Ø§Ø¨Ø·",
        linkdialog: "<p><b>InsÃ©rer un hyperlien</b></p><p>http://example.com/ \"titre optionnel\"</p>",
        
        quote: "Ø¥Ù‚ØªØ¨Ø§Ø³ <blockquote> Ctrl+Q",
        quoteexample: "Ø¥Ù‚ØªØ¨Ø§Ø³",
        
        code: "ÙƒÙˆØ¯ <pre><code> Ctrl+K",
        codeexample: "ÙƒÙˆØ¯",
        
        image: "ØµÙˆØ±Ø© <img> Ctrl+G",
        imagedescription: "ÙˆØµÙ Ù„Ù„ØµÙˆØ±Ø©",
        imagedialog: "<p><b>InsÃ©rer une image</b></p><p>http://example.com/images/diagram.jpg \"titre optionnel\"<br><br><a href='http://www.google.com/search?q=free+image+hosting' target='_blank'>Vous chercher un hÃ©bergement d'image grauit ?</a></p>",
        
        olist: "Ù‚Ø§Ø¦Ù…Ø© Ù…Ø±Ù‚Ù…Ø© <ol> Ctrl+O",
        ulist: "Ù‚Ø§Ø¦Ù…Ø© Ù†Ù‚Ø·ÙŠØ© <ul> Ctrl+U",
        litem: "Ø¹Ù†ØµØ± Ù‚Ø§Ø¦Ù…Ø©",
        
        heading: "Ù„Ù‚Ø¨ <h1>/<h2> Ctrl+H",
        headingexample: "Ù„Ù‚Ø¨",
        
        hr: "Ø®Ø· Ø£ÙÙ‚ÙŠ <hr> Ctrl+R",
        
        undo: "Ø¥Ù„ØºØ§Ø¡ - Ctrl+Z",
        redo: "Ø¥Ø¹Ø§Ø¯Ø© ØªØ´ÙƒÙŠÙ„ - Ctrl+Y",
        redomac: "Ø¥Ø¹Ø§Ø¯Ø© ØªØ´ÙƒÙŠÙ„ - Ctrl+Shift+Z",
        
        help: "Ù…Ø³Ø§Ø¹Ø¯Ø©"
    };
}

$(document).ready(function() {

    Markdown.local = Markdown.local || {};

    var locale = $('body').attr('id');
    if(locale === 'fr') {
        fr();
    } else if(locale === 'ar') {
        ar();
    }

    var help = function() {
        alert("Do you need help?");
    };

    var options = {
        helpButton: {handler: help},
        strings: Markdown.local.value
    };

    var converter = Markdown.getSanitizingConverter();
    var editor = new Markdown.Editor(converter, null, options);
    editor.run();
    
   // $('.wmd-input:not(.processed)').TextAreaResizer();    
});