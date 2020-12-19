jQuery( function( $ ){
    $(".c-nav-toggle").on("click", function () {
        $( this ).toggleClass( "is-open" );
        $( ".l-sideber" ).toggleClass( "is-open" );
        $( "body" ).toggleClass( "is-open" );
    });
    });