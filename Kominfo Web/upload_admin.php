<!--HEADER-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
  session_start();
  if(!isset($_SESSION['username'])) {
    header('location:index.php');
    exit;
  }?>
  <head>
    <title>STATISTIK DISKOMINFO NGAWI</title>
    <meta content="utf-8" http-equiv="encoding">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link type='text/css' href="novan.css" rel='Stylesheet'/>
    
    <link rel="stylesheet" href="p//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".group2").colorbox({rel:'group2', transition:"fade"});
        $(".group3").colorbox({rel:'group3', transition:"fade"});
      });
    </script>


    <script>
      

$(document).ready(function() {

    var table = $('#table');

    // Table bordered
    $('#table-bordered').change(function() {
        var value = $( this ).val();
        table.removeClass('table-bordered').addClass(value);
    });

    // Table striped
    $('#table-striped').change(function() {
        var value = $( this ).val();
        table.removeClass('table-striped').addClass(value);
    });
  
    // Table hover
    $('#table-hover').change(function() {
        var value = $( this ).val();
        table.removeClass('table-hover').addClass(value);
    });

    // Table color
    $('#table-color').change(function() {
        var value = $(this).val();
        table.removeClass(/^table-mc-/).addClass(value);
    });
});

// jQuery’s hasClass and removeClass on steroids
// by Nikita Vasilyev
// https://github.com/NV/jquery-regexp-classes
(function(removeClass) {

  jQuery.fn.removeClass = function( value ) {
    if ( value && typeof value.test === "function" ) {
      for ( var i = 0, l = this.length; i < l; i++ ) {
        var elem = this[i];
        if ( elem.nodeType === 1 && elem.className ) {
          var classNames = elem.className.split( /\s+/ );

          for ( var n = classNames.length; n--; ) {
            if ( value.test(classNames[n]) ) {
              classNames.splice(n, 1);
            }
          }
          elem.className = jQuery.trim( classNames.join(" ") );
        }
      }
    } else {
      removeClass.call(this, value);
    }
    return this;
  }

})(jQuery.fn.removeClass);
    </script>



    <style>
      
/* -- import Roboto Font ---------------------------- */
@import "https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic";

/* -- You can use this tables in Bootstrap (v3) projects. -- */
// @import "//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css";


/* -- Box model ------------------------------- */
*,
*:after,
*:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

/* -- Demo style ------------------------------- */
html, body {
  position: relative;
  min-height: 100%;
  height: 100%;
}

html {
  position: relative;
  overflow-x: visible;
  margin: 16px;
  padding: 0;
  min-height: 100%;
  font-size: 62.5%; // For rem units support
}

body {
  font-family: 'RobotoDraft', 'Roboto', 'Helvetica Neue, Helvetica, Arial', sans-serif;
  font-style: normal;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 2rem;
  letter-spacing: 0.01rem;
  color: #212121;
  background-color: #f5f5f5;

  // Font Rendering
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
}

#demo {
  margin: 20px auto;
  max-width: 960px;
}

// Material Design typography
// https://codepen.io/zavoloklom/pen/IkaFL
#demo h1 {
  font-size: 2.4rem;
  line-height: 3.2rem;
  letter-spacing: 0;
  font-weight: 300;
  color: #212121;
  text-transform: inherit;
  margin-bottom: 1rem;
  text-align: center;
}
#demo h2 {
  font-size: 1.5rem;
  line-height: 2.8rem;
  letter-spacing: 0.01rem;
  font-weight: 400;
  color: #212121;
  text-align: center;
}

// Material Design shadows
// 
.shadow-z-1 {
  -webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,.12),
                      0 1px 2px 0 rgba(0,0,0,.24);
  -moz-box-shadow:    0 1px 3px 0 rgba(0,0,0,.12),
                      0 1px 2px 0 rgba(0,0,0,.24);
  box-shadow:         0 1px 3px 0 rgba(0,0,0,.12),
                      0 1px 2px 0 rgba(0,0,0,.24);
}


/* -- Material Design Table style -------------- */

// Variables
// ---------------------
@table-header-font-weight:      400;
@table-header-font-color:       #757575;

@table-cell-padding:            1.6rem;
@table-condensed-cell-padding:  @table-cell-padding/2;


@table-bg:                      #fff;
@table-bg-accent:               #f5f5f5;
@table-bg-hover:                rgba(0,0,0,.12);
@table-bg-active:               @table-bg-hover;
@table-border-color:            #e0e0e0;



// Mixins
// -----------------
.transition(@transition) {
  -webkit-transition: @transition;
       -o-transition: @transition;
          transition: @transition;
}

// Tables
//
// -----------------

// Baseline styles
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 2rem;
  background-color: @table-bg;
  > thead,
  > tbody,
  > tfoot {
    > tr {
      .transition(all .3s ease);
      > th,
      > td {
        text-align: left;
        padding: @table-cell-padding;
        vertical-align: top;
        border-top: 0;
        .transition(all .3s ease);
      }
    }
  }
  > thead > tr > th {
    font-weight: @table-header-font-weight;
    color: @table-header-font-color;
    vertical-align: bottom;
    border-bottom: 1px solid rgba(0,0,0,.12);
  }
  > caption + thead,
  > colgroup + thead,
  > thead:first-child {
    > tr:first-child {
      > th,
      > td {
        border-top: 0;
      }
    }
  }
  > tbody + tbody {
    border-top: 1px solid rgba(0,0,0,.12);
  }

  // Nesting
  .table {
    background-color: @table-bg;
  }

  // Remove border
  .no-border {
    border: 0;
  }
}

// Condensed table w/ half padding
.table-condensed {
  > thead,
  > tbody,
  > tfoot {
    > tr {
      > th,
      > td {
        padding: @table-condensed-cell-padding;
      }
    }
  }
}


// Bordered version
//
// Add horizontal borders between columns.
.table-bordered {
  border: 0;
  > thead,
  > tbody,
  > tfoot {
    > tr {
      > th,
      > td {
        border: 0;
        border-bottom: 1px solid @table-border-color;
      }
    }
  }
  > thead > tr {
    > th,
    > td {
      border-bottom-width: 2px;
    }
  }
}


// Zebra-striping
//
// Default zebra-stripe styles (alternating gray and transparent backgrounds)
.table-striped {
  > tbody > tr:nth-child(odd) {
    > td,
    > th {
      background-color: @table-bg-accent;
    }
  }
}

// Hover effect
//
.table-hover {
  > tbody > tr:hover {
    > td,
    > th {
      background-color: @table-bg-hover;
    }
  }
}

// Responsive tables (vertical)
//
// Wrap your tables in `.table-responsive-vertical` and we'll make them mobile friendly
// by vertical table-cell display. Only applies <768px. Everything above that will display normally.
// For correct display you must add 'data-title' to each 'td'
.table-responsive-vertical {

  @media screen and (max-width: 768px) {

    // Tighten up spacing
    > .table {
      margin-bottom: 0;
      background-color: transparent;
      > thead,
      > tfoot {
        display: none;
      }

      > tbody {
        display: block;

        > tr {
          display: block;
          border: 1px solid @table-border-color;
          border-radius: 2px;
          margin-bottom: @table-cell-padding;

          > td {
            background-color: @table-bg;
            display: block;
            vertical-align: middle;
            text-align: right;
          }
          > td[data-title]:before {
            content: attr(data-title);
            float: left;
            font-size: inherit;
            font-weight: @table-header-font-weight;
            color: @table-header-font-color;
          }
        }
      }
    }
    
    // Special overrides for shadows
    &.shadow-z-1 {
      -webkit-box-shadow: none;
      -moz-box-shadow: none;
      box-shadow: none;
      > .table > tbody > tr {
        border: none;
        .shadow-z-1();
      }
    }

    // Special overrides for the bordered tables
    > .table-bordered {
      border: 0;

      // Nuke the appropriate borders so that the parent can handle them
      > tbody {
        > tr {
          > td {
            border: 0;
            border-bottom: 1px solid @table-border-color;
          }
          > td:last-child {
            border-bottom: 0;
          }
        }
      }
    }

    // Special overrides for the striped tables
    > .table-striped {
      > tbody > tr > td,
      > tbody > tr:nth-child(odd) {
          background-color: @table-bg;
      }
      > tbody > tr > td:nth-child(odd) {
          background-color: @table-bg-accent;
      }
    }

    // Special overrides for hover tables
    > .table-hover {
      > tbody {
        > tr:hover > td,
        > tr:hover {
          background-color: @table-bg;
        }
        > tr > td:hover {
          background-color: @table-bg-hover;
        }
      }
    }
  }
}


// CSS/LESS Color variations
//
// --------------------------------


.table-striped.table-mc-red > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-red > tbody > tr:nth-child(odd) > th {
    background-color: #fde0dc;
}
.table-hover.table-mc-red > tbody > tr:hover > td,
.table-hover.table-mc-red > tbody > tr:hover > th {
    background-color: #f9bdbb;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-red > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-red > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-red > tbody > tr > td:nth-child(odd) {
        background-color: #fde0dc;
    }
    .table-responsive-vertical .table-hover.table-mc-red > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-red > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-red > tbody > tr > td:hover {
        background-color: #f9bdbb;
    }
}
.table-striped.table-mc-pink > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-pink > tbody > tr:nth-child(odd) > th {
    background-color: #fce4ec;
}
.table-hover.table-mc-pink > tbody > tr:hover > td,
.table-hover.table-mc-pink > tbody > tr:hover > th {
    background-color: #f8bbd0;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-pink > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-pink > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-pink > tbody > tr > td:nth-child(odd) {
        background-color: #fce4ec;
    }
    .table-responsive-vertical .table-hover.table-mc-pink > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-pink > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-pink > tbody > tr > td:hover {
        background-color: #f8bbd0;
    }
}
.table-striped.table-mc-purple > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-purple > tbody > tr:nth-child(odd) > th {
    background-color: #f3e5f5;
}
.table-hover.table-mc-purple > tbody > tr:hover > td,
.table-hover.table-mc-purple > tbody > tr:hover > th {
    background-color: #e1bee7;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-purple > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-purple > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-purple > tbody > tr > td:nth-child(odd) {
        background-color: #f3e5f5;
    }
    .table-responsive-vertical .table-hover.table-mc-purple > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-purple > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-purple > tbody > tr > td:hover {
        background-color: #e1bee7;
    }
}
.table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) > th {
    background-color: #ede7f6;
}
.table-hover.table-mc-deep-purple > tbody > tr:hover > td,
.table-hover.table-mc-deep-purple > tbody > tr:hover > th {
    background-color: #d1c4e9;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr > td:nth-child(odd) {
        background-color: #ede7f6;
    }
    .table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr > td:hover {
        background-color: #d1c4e9;
    }
}
.table-striped.table-mc-indigo > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-indigo > tbody > tr:nth-child(odd) > th {
    background-color: #e8eaf6;
}
.table-hover.table-mc-indigo > tbody > tr:hover > td,
.table-hover.table-mc-indigo > tbody > tr:hover > th {
    background-color: #c5cae9;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr > td:nth-child(odd) {
        background-color: #e8eaf6;
    }
    .table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr > td:hover {
        background-color: #c5cae9;
    }
}
.table-striped.table-mc-blue > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-blue > tbody > tr:nth-child(odd) > th {
    background-color: #e7e9fd;
}
.table-hover.table-mc-blue > tbody > tr:hover > td,
.table-hover.table-mc-blue > tbody > tr:hover > th {
    background-color: #d0d9ff;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-blue > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-blue > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-blue > tbody > tr > td:nth-child(odd) {
        background-color: #e7e9fd;
    }
    .table-responsive-vertical .table-hover.table-mc-blue > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-blue > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-blue > tbody > tr > td:hover {
        background-color: #d0d9ff;
    }
}
.table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) > th {
    background-color: #e1f5fe;
}
.table-hover.table-mc-light-blue > tbody > tr:hover > td,
.table-hover.table-mc-light-blue > tbody > tr:hover > th {
    background-color: #b3e5fc;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr > td:nth-child(odd) {
        background-color: #e1f5fe;
    }
    .table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr > td:hover {
        background-color: #b3e5fc;
    }
}
.table-striped.table-mc-cyan > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-cyan > tbody > tr:nth-child(odd) > th {
    background-color: #e0f7fa;
}
.table-hover.table-mc-cyan > tbody > tr:hover > td,
.table-hover.table-mc-cyan > tbody > tr:hover > th {
    background-color: #b2ebf2;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr > td:nth-child(odd) {
        background-color: #e0f7fa;
    }
    .table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr > td:hover {
        background-color: #b2ebf2;
    }
}
.table-striped.table-mc-teal > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-teal > tbody > tr:nth-child(odd) > th {
    background-color: #e0f2f1;
}
.table-hover.table-mc-teal > tbody > tr:hover > td,
.table-hover.table-mc-teal > tbody > tr:hover > th {
    background-color: #b2dfdb;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-teal > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-teal > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-teal > tbody > tr > td:nth-child(odd) {
        background-color: #e0f2f1;
    }
    .table-responsive-vertical .table-hover.table-mc-teal > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-teal > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-teal > tbody > tr > td:hover {
        background-color: #b2dfdb;
    }
}
.table-striped.table-mc-green > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-green > tbody > tr:nth-child(odd) > th {
    background-color: #d0f8ce;
}
.table-hover.table-mc-green > tbody > tr:hover > td,
.table-hover.table-mc-green > tbody > tr:hover > th {
    background-color: #a3e9a4;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-green > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-green > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-green > tbody > tr > td:nth-child(odd) {
        background-color: #d0f8ce;
    }
    .table-responsive-vertical .table-hover.table-mc-green > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-green > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-green > tbody > tr > td:hover {
        background-color: #a3e9a4;
    }
}
.table-striped.table-mc-light-green > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-light-green > tbody > tr:nth-child(odd) > th {
    background-color: #f1f8e9;
}
.table-hover.table-mc-light-green > tbody > tr:hover > td,
.table-hover.table-mc-light-green > tbody > tr:hover > th {
    background-color: #dcedc8;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr > td:nth-child(odd) {
        background-color: #f1f8e9;
    }
    .table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr > td:hover {
        background-color: #dcedc8;
    }
}
.table-striped.table-mc-lime > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-lime > tbody > tr:nth-child(odd) > th {
    background-color: #f9fbe7;
}
.table-hover.table-mc-lime > tbody > tr:hover > td,
.table-hover.table-mc-lime > tbody > tr:hover > th {
    background-color: #f0f4c3;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-lime > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-lime > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-lime > tbody > tr > td:nth-child(odd) {
        background-color: #f9fbe7;
    }
    .table-responsive-vertical .table-hover.table-mc-lime > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-lime > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-lime > tbody > tr > td:hover {
        background-color: #f0f4c3;
    }
}
.table-striped.table-mc-yellow > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-yellow > tbody > tr:nth-child(odd) > th {
    background-color: #fffde7;
}
.table-hover.table-mc-yellow > tbody > tr:hover > td,
.table-hover.table-mc-yellow > tbody > tr:hover > th {
    background-color: #fff9c4;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr > td:nth-child(odd) {
        background-color: #fffde7;
    }
    .table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr > td:hover {
        background-color: #fff9c4;
    }
}
.table-striped.table-mc-amber > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-amber > tbody > tr:nth-child(odd) > th {
    background-color: #fff8e1;
}
.table-hover.table-mc-amber > tbody > tr:hover > td,
.table-hover.table-mc-amber > tbody > tr:hover > th {
    background-color: #ffecb3;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-amber > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-amber > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-amber > tbody > tr > td:nth-child(odd) {
        background-color: #fff8e1;
    }
    .table-responsive-vertical .table-hover.table-mc-amber > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-amber > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-amber > tbody > tr > td:hover {
        background-color: #ffecb3;
    }
}
.table-striped.table-mc-orange > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-orange > tbody > tr:nth-child(odd) > th {
    background-color: #fff3e0;
}
.table-hover.table-mc-orange > tbody > tr:hover > td,
.table-hover.table-mc-orange > tbody > tr:hover > th {
    background-color: #ffe0b2;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-orange > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-orange > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-orange > tbody > tr > td:nth-child(odd) {
        background-color: #fff3e0;
    }
    .table-responsive-vertical .table-hover.table-mc-orange > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-orange > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-orange > tbody > tr > td:hover {
        background-color: #ffe0b2;
    }
}
.table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) > th {
    background-color: #fbe9e7;
}
.table-hover.table-mc-deep-orange > tbody > tr:hover > td,
.table-hover.table-mc-deep-orange > tbody > tr:hover > th {
    background-color: #ffccbc;
}
@media screen and (max-width: 767px) {
    .table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr > td,
    .table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr > td:nth-child(odd) {
        background-color: #fbe9e7;
    }
    .table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr:hover > td,
    .table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr:hover {
        background-color: @table-bg;
    }
    .table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr > td:hover {
        background-color: #ffccbc;
    }
}



    </style>



    <style type="text/css">
  #wrapper {
  margin: 0 auto;
  float: none;
  width:70%;
}
.header {
  padding:10px 0;
  border-bottom:1px solid #CCC;
}
.title {
  padding: 0 5px 0 0;
  float:left;
  margin:0;
}
.container form input {
  height: 30px;
}
body
{
    
    font-size:12;
    font-weight:bold;
}

    </style>


  </head>


  <!---------------------------------- HEADER ------------------------------------------->

<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>


</head>
<body>



<div class="header">

  <a href="browse.php" class="logo"><img src="images/Ngawi.png" width="300" height="auto"></a>
  <br>
  <br>
  <h1><font face="Arial black" size="72">DATA STATISTIKA <br><br>DISKOMINFO NGAWI</font><h1> 

  <div class="header-right">
    <a class="" href="verification.php">Verification</a>
    <a href="browse_admin.php">Browse</a>
    <a class="active" href="upload_admin.php">Upload</a>
    <a class=""href="user.php">User</a>
    <a class=""href="insert_user.php">Insert User</a>
    <a href="logout.php">Logout</a>
  </div>
</div>

<!-------------------------------------------  CONTENT --------------------------------------------->
<br>
<br>
 <?php
      if(!empty($_POST))
      {
        $con = mysql_connect("localhost","root","","apa");
        if (!$con)
          echo('Could not connect: ' . mysql_error());
        else
        {
          if (file_exists("download/" . $_FILES["file"]["name"]))
          {
            echo '<script language="javascript">alert(" Sorry!! Filename Already Exists...")</script>';
          }
          else
          {
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "download/" . $_FILES["file"]["name"]) ;
            mysql_select_db("apa", $con);
            $sql = "INSERT INTO presentation(subject,topic,file) VALUES ('" . $_POST["sub"] ."','" . $_POST["pre"] . "','" . 
                $_FILES["file"]["name"] ."');";
            if (!mysql_query($sql,$con))
              echo('Error : ' . mysql_error());
            else
              echo '<script language="javascript">alert("Thank You!! File Uploded")</script>';
            }
        }
        mysql_close($con);
      }
        ?>
    </head>
     <body>
     <div class="container home">
      <br>
    <h3><center> UPLOAD FILE PAGE </center> </h3> </font>

        <form id="form3" enctype="multipart/form-data" method="post" action="upload.php">
             <table class="table table-bordered">           
                <tr>
                    <td>  <label for="sub">Subject: </label>  </td>
                    <td>  <input type="text" name="sub" id="sub" class="input-medium"  
                   required autofocus placeholder="Title of the subject"/>  </td>
                </tr>
                <tr>
                    <td valign="top" align="left">Presentation:</td>
                    <td valign="top" align="left"><input type="text" name="pre" cols="50" rows="10" id="pre"  
          placeholder="Type of Presentation"
          class="input-medium" required></textarea></td>
                </tr>
                <tr>
                    <td><label for="file">File:</label></td>
                    <td><input type="file" name="file" id="file" 
                        title="Click here to select file to upload." required /></td>
                </tr>
                <tr>
                  
           <td colspan="2" align="center">        
           <input type="submit" class="btn btn-primary" name="upload" id="upload" 
           title="Click here to upload the file." value="Upload File" /> </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>
