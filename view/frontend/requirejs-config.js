// define('viewer', ['Magepow_ViewerPdf/js/web/viewer'], function (ss) {
//     window.viewer = ss;
//     return viewer;
// });
var config = {
    paths: {
        'pdfjs-dist': 'Magepow_ViewerPdf/js/pdfjs-dist',
        'pdfjs-dist/web/debugger': 'Magepow_ViewerPdf/js/pdfjs-dist/js/web/debugger',
        'pdfjs-dist/build/pdf': 'Magepow_ViewerPdf/js/pdfjs-dist/build/pdf',
        'pdfjs-dist/build/pdf.worker': 'Magepow_ViewerPdf/js/pdfjs-dist/build/pdf.worker',
        'pdfjs-dist/web/viewer': 'Magepow_ViewerPdf/js/web/viewer',
        'pdfjs-config': 'Magepow_ViewerPdf/js/web/pdfjs-config'   
    },
    shim: {
        'pdfjs-config': {
            'deps': ['pdfjs-dist/build/pdf', 'pdfjs-dist/build/pdf.worker']
        },
        'pdfjs-dist/web/viewer': {
            'deps': ['pdfjs-config']
        }
    }
};
