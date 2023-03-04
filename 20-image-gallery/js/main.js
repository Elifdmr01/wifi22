// Aktenzeichen für HTML 
    let proto = `
    <a href="images/#.jpg">
        <img src="images/thumbs/#.jpg" alt="">
    </a>

`;


    let images = [
        1,
        2,
        3,
        4,
    ];


    $(images).each(function(indes, element) {
     let html = $(proto);
     let imgSrc = html.find('img').attr('src');

     // ersetzen des Platzhalters "#" mit dem Element-Wert aus
        imgSrc.replace('#', element);


        $('body').append(html);
    });

  

    console.log( $(proto).find('img').attr('src') );