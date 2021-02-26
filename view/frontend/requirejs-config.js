// define('viewer', ['Magepow_ViewerPdf/js/web/viewer'], function (ss) {
//     window.viewer = ss;
//     return viewer;
// });
var config = {
    paths: {
        'pdfjs-dist': 'Magepow_ViewerPdf/js/pdfjs-dist',
        'pdfjs-dist/build/pdf': 'Magepow_ViewerPdf/js/pdfjs-dist/build/pdf',
        'pdfjs-dist/build/pdf.worker': 'Magepow_ViewerPdf/js/pdfjs-dist/build/pdf.worker',
        'pdfjs-dist/web/viewer': 'Magepow_ViewerPdf/js/web/viewer'   
    },
    // shim: {
    //     'pdfjs-config': {
    //         'deps': ['pdfjs-dist/build/pdf', 'pdfjs-dist/build/pdf.worker']
    //     },
    //     'pdfjs-dist/web/viewer': {
    //         'deps': ['pdfjs-config']
    //     }
    // }
};
