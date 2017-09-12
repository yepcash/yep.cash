var getJSON = function(url, callback) {

    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.responseType = 'json';

    xhr.onload = function() {

        var status = xhr.status;

        if (status == 200) {
            callback(null, xhr.response);
        } else {
            callback(status);
        }
    };

    xhr.send();
};

getJSON('https://blockchain.info/ticker',  function(err, data) {

    if (err != null) {
        console.error(err);
    } else {

        var text = `${data.USD.last}`
//Time: ${data.time}
//Unix time: ${data.milliseconds_since_epoch}`

        console.log(text);
     $("#latest").html(text);

    }
});
