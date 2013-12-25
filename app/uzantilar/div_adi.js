
var page = require('webpage').create(),
    address, output, size, div_id;


     //console.log(phantom.args.join('\n'));

if (phantom.args.length < 10) {
    console.log('Missing arguments.');
    phantom.exit();
} else {
    address = phantom.args[0];
    output = phantom.args[1];

    //set viewpoint
    vpW = phantom.args[2];
    vpH = phantom.args[3];
    if (vpW > 0 && vpH > 0) page.viewportSize = { width: vpW, height: vpH };

    //set clipping
    clipT = phantom.args[4];
    clipL = phantom.args[5];
    clipW = phantom.args[6];
    clipH = phantom.args[7];
    if (clipW > 0 && clipH > 0) page.clipRect = { top: clipT, left: clipL, width: clipW, height: clipH};

    delay = phantom.args[8];

    div_id = phantom.args[9];

    //console.log(div_id);



    page.open(address, function (status) {
        if (status !== 'success') {
            console.log('Unable to load the address!');
        } else {
            // var height = page.evaluate(function(id){
            //     return document.getElementById( id ).offsetHeight;
            // }('testasamasi')); 

            eval("var height = page.evaluate(function(){ return document.getElementById( '" + div_id + "' ).offsetHeight; });");
            eval("var width  = page.evaluate(function(){ return document.getElementById( '" + div_id + "' ).offsetWidth;  });");
            // var width = page.evaluate(function(id){
            //     return document.getElementById(id).offsetWidth;
            // }(div_id));

            eval("var rect = page.evaluate(function(){ return document.getElementById('" + div_id + "').getBoundingClientRect(); }); ");

            console.log(rect.top, rect.right, rect.bottom, rect.left);

            //console.log('Crop to: '+width+"x"+height);

            page.clipRect = { top: rect.top, left: rect.left, width: width, height: height };
            window.setTimeout(function () {
                page.render(output);
                phantom.exit();
            }, 200);
        }
    });


}




