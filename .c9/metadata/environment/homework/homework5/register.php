{"filter":false,"title":"register.php","tooltip":"/homework/homework5/register.php","ace":{"folds":[],"scrolltop":238.5,"scrollleft":0,"selection":{"start":{"row":33,"column":11},"end":{"row":33,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":1,"state":"start","mode":"ace/mode/php"}},"hash":"1229685602c83e3047eae84b884d9768375a595b","undoManager":{"mark":76,"position":76,"stack":[[{"start":{"row":0,"column":0},"end":{"row":1,"column":51},"action":"insert","lines":[" <?php include('includes/header.php'); ?>"," <?php include('includes/inc_registration.php'); ?>"],"id":1}],[{"start":{"row":1,"column":51},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":[" "]},{"start":{"row":2,"column":1},"end":{"row":3,"column":0},"action":"insert","lines":["",""]},{"start":{"row":3,"column":0},"end":{"row":3,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":3,"column":1},"end":{"row":26,"column":12},"action":"insert","lines":["<main>"," <h1>Registration Form</h1>","","            <p>Register Today</p>","          <?php","                if(isset($error_firstname)) {","                    echo \"<p class=\\\"error\\\">$error_firstname</p>\";","                }","                if(isset($error_lastname)) {","                    echo \"<p class=\\\"error\\\">$error_lastname</p>\";","                }","                if(isset($error)) {","                    echo \"<p class=\\\"error\\\">$error</p>\";","                }","                if(isset($error_password)) {","                    echo \"<p class=\\\"error\\\">$error_password</p>\";","                }","                if(isset($error_confirmpassword)) {","                    echo \"<p class=\\\"error\\\">$error_confirmpassword</p>\";","                }","                if(isset($congrats)) {","                   echo \"<p><strong>$congrats</strong></p>\";","                }","          ?>"],"id":3}],[{"start":{"row":26,"column":12},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":27,"column":0},"end":{"row":27,"column":10},"action":"insert","lines":["          "]},{"start":{"row":27,"column":10},"end":{"row":28,"column":0},"action":"insert","lines":["",""]},{"start":{"row":28,"column":0},"end":{"row":28,"column":10},"action":"insert","lines":["          "]},{"start":{"row":28,"column":10},"end":{"row":29,"column":0},"action":"insert","lines":["",""]},{"start":{"row":29,"column":0},"end":{"row":29,"column":10},"action":"insert","lines":["          "]}],[{"start":{"row":29,"column":10},"end":{"row":58,"column":15},"action":"insert","lines":["<form action=\"register.php\" method=\"POST\">","","            <label for=\"first_name\">First Name: </label>","            <input type=\"text\" id=\"first_name\" name=\"first_name\" value=\"<?php echo $first_name; ?>\">","","            <br><br>","","            <label for=\"last_name\">Last Name: </label>","            <input type=\"text\" id=\"last_name\" name=\"last_name\" value=\"<?php echo $last_name; ?>\">","","            <br><br>","","            <label for=\"email\">Email Address: </label>","            <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"example@example.com\" value=\"<?php echo $email; ?>\">","","            <br><br>","","            <label for=\"password\">Password: </label>","            <input type=\"password\" id=\"password\" name=\"password\" value=\"<?php echo $password; ?>\" >","","            <br><br>","","            <label for=\"confirm_password\">Confirm Password: </label>","            <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" value=\"<?php echo $confirm_password; ?>\">","","            <br><br>","","","            <button id=\"regBtn\">Register!</button>","        </form>"],"id":5}],[{"start":{"row":57,"column":25},"end":{"row":57,"column":30},"action":"remove","lines":["egBtn"],"id":6},{"start":{"row":57,"column":24},"end":{"row":57,"column":25},"action":"remove","lines":["r"]}],[{"start":{"row":57,"column":24},"end":{"row":57,"column":25},"action":"insert","lines":["b"],"id":7},{"start":{"row":57,"column":25},"end":{"row":57,"column":26},"action":"insert","lines":["u"]},{"start":{"row":57,"column":26},"end":{"row":57,"column":27},"action":"insert","lines":["t"]},{"start":{"row":57,"column":27},"end":{"row":57,"column":28},"action":"insert","lines":["t"]},{"start":{"row":57,"column":28},"end":{"row":57,"column":29},"action":"insert","lines":["o"]},{"start":{"row":57,"column":29},"end":{"row":57,"column":30},"action":"insert","lines":["n"]}],[{"start":{"row":57,"column":30},"end":{"row":57,"column":31},"action":"insert","lines":["r"],"id":8},{"start":{"row":57,"column":31},"end":{"row":57,"column":32},"action":"insert","lines":["e"]},{"start":{"row":57,"column":32},"end":{"row":57,"column":33},"action":"insert","lines":["g"]}],[{"start":{"row":58,"column":15},"end":{"row":59,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":59,"column":0},"end":{"row":59,"column":8},"action":"insert","lines":["        "]},{"start":{"row":59,"column":8},"end":{"row":60,"column":0},"action":"insert","lines":["",""]},{"start":{"row":60,"column":0},"end":{"row":60,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":60,"column":8},"end":{"row":60,"column":49},"action":"insert","lines":[" <?php include('includes/footer.php'); ?>"],"id":10}],[{"start":{"row":6,"column":33},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":7,"column":0},"end":{"row":7,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":61,"column":24},"end":{"row":61,"column":33},"action":"remove","lines":["includes/"],"id":12}],[{"start":{"row":61,"column":22},"end":{"row":61,"column":23},"action":"remove","lines":["("],"id":13}],[{"start":{"row":61,"column":34},"end":{"row":61,"column":35},"action":"remove","lines":[")"],"id":14}],[{"start":{"row":61,"column":22},"end":{"row":61,"column":23},"action":"insert","lines":[" "],"id":15}],[{"start":{"row":0,"column":14},"end":{"row":0,"column":25},"action":"remove","lines":["('includes/"],"id":16}],[{"start":{"row":0,"column":14},"end":{"row":0,"column":15},"action":"insert","lines":[" "],"id":17},{"start":{"row":0,"column":15},"end":{"row":0,"column":16},"action":"insert","lines":["'"]}],[{"start":{"row":0,"column":27},"end":{"row":0,"column":28},"action":"remove","lines":[")"],"id":18}],[{"start":{"row":1,"column":24},"end":{"row":1,"column":25},"action":"remove","lines":["/"],"id":19},{"start":{"row":1,"column":23},"end":{"row":1,"column":24},"action":"remove","lines":["s"]},{"start":{"row":1,"column":22},"end":{"row":1,"column":23},"action":"remove","lines":["e"]},{"start":{"row":1,"column":21},"end":{"row":1,"column":22},"action":"remove","lines":["d"]},{"start":{"row":1,"column":20},"end":{"row":1,"column":21},"action":"remove","lines":["u"]},{"start":{"row":1,"column":19},"end":{"row":1,"column":20},"action":"remove","lines":["l"]},{"start":{"row":1,"column":18},"end":{"row":1,"column":19},"action":"remove","lines":["c"]},{"start":{"row":1,"column":17},"end":{"row":1,"column":18},"action":"remove","lines":["n"]},{"start":{"row":1,"column":16},"end":{"row":1,"column":17},"action":"remove","lines":["i"]}],[{"start":{"row":1,"column":14},"end":{"row":1,"column":15},"action":"remove","lines":["("],"id":20}],[{"start":{"row":1,"column":14},"end":{"row":1,"column":15},"action":"insert","lines":[" "],"id":21}],[{"start":{"row":1,"column":37},"end":{"row":1,"column":38},"action":"remove","lines":[")"],"id":22}],[{"start":{"row":6,"column":33},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":23},{"start":{"row":7,"column":0},"end":{"row":7,"column":12},"action":"insert","lines":["            "]},{"start":{"row":7,"column":12},"end":{"row":8,"column":0},"action":"insert","lines":["",""]},{"start":{"row":8,"column":0},"end":{"row":8,"column":12},"action":"insert","lines":["            "]},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"insert","lines":["<"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["l"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["i"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["n"]}],[{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["k"],"id":24}],[{"start":{"row":8,"column":13},"end":{"row":8,"column":17},"action":"remove","lines":["link"],"id":25},{"start":{"row":8,"column":13},"end":{"row":8,"column":61},"action":"insert","lines":["link rel=\"stylesheet\" href=\"\" type=\"text/css\" />"]}],[{"start":{"row":8,"column":41},"end":{"row":8,"column":138},"action":"insert","lines":["https://imgc.artprintimages.com/img/print/classic-book-cover-collage_u-l-q19rm920.jpg?h=550&w=550"],"id":26}],[{"start":{"row":8,"column":18},"end":{"row":8,"column":34},"action":"remove","lines":["rel=\"stylesheet\""],"id":27},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"remove","lines":[" "]}],[{"start":{"row":8,"column":130},"end":{"row":8,"column":137},"action":"remove","lines":["ext/css"],"id":28},{"start":{"row":8,"column":129},"end":{"row":8,"column":130},"action":"remove","lines":["t"]}],[{"start":{"row":8,"column":129},"end":{"row":8,"column":130},"action":"remove","lines":["\""],"id":29},{"start":{"row":8,"column":128},"end":{"row":8,"column":129},"action":"remove","lines":["\""]},{"start":{"row":8,"column":127},"end":{"row":8,"column":128},"action":"remove","lines":["="]},{"start":{"row":8,"column":126},"end":{"row":8,"column":127},"action":"remove","lines":["e"]},{"start":{"row":8,"column":125},"end":{"row":8,"column":126},"action":"remove","lines":["p"]},{"start":{"row":8,"column":124},"end":{"row":8,"column":125},"action":"remove","lines":["y"]},{"start":{"row":8,"column":123},"end":{"row":8,"column":124},"action":"remove","lines":["t"]}],[{"start":{"row":8,"column":123},"end":{"row":8,"column":124},"action":"insert","lines":["r"],"id":30},{"start":{"row":8,"column":124},"end":{"row":8,"column":125},"action":"insert","lines":["e"]},{"start":{"row":8,"column":125},"end":{"row":8,"column":126},"action":"insert","lines":["l"]}],[{"start":{"row":8,"column":126},"end":{"row":8,"column":127},"action":"insert","lines":["="],"id":31}],[{"start":{"row":8,"column":127},"end":{"row":8,"column":129},"action":"insert","lines":["\"\""],"id":32}],[{"start":{"row":8,"column":128},"end":{"row":8,"column":129},"action":"insert","lines":["s"],"id":33},{"start":{"row":8,"column":129},"end":{"row":8,"column":130},"action":"insert","lines":["t"]},{"start":{"row":8,"column":130},"end":{"row":8,"column":131},"action":"insert","lines":["y"]},{"start":{"row":8,"column":131},"end":{"row":8,"column":132},"action":"insert","lines":["l"]},{"start":{"row":8,"column":132},"end":{"row":8,"column":133},"action":"insert","lines":["e"]},{"start":{"row":8,"column":133},"end":{"row":8,"column":134},"action":"insert","lines":["s"]},{"start":{"row":8,"column":134},"end":{"row":8,"column":135},"action":"insert","lines":["h"]},{"start":{"row":8,"column":135},"end":{"row":8,"column":136},"action":"insert","lines":["e"]},{"start":{"row":8,"column":136},"end":{"row":8,"column":137},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":137},"end":{"row":8,"column":138},"action":"insert","lines":["t"],"id":34}],[{"start":{"row":8,"column":11},"end":{"row":8,"column":142},"action":"remove","lines":[" <link href=\"https://imgc.artprintimages.com/img/print/classic-book-cover-collage_u-l-q19rm920.jpg?h=550&w=550\" rel=\"stylesheet\" />"],"id":35}],[{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"insert","lines":["i"],"id":36},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"insert","lines":["m"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["g"]}],[{"start":{"row":8,"column":11},"end":{"row":8,"column":14},"action":"remove","lines":["img"],"id":37},{"start":{"row":8,"column":11},"end":{"row":8,"column":29},"action":"insert","lines":["<img src=\"\"></img>"]}],[{"start":{"row":8,"column":21},"end":{"row":8,"column":118},"action":"insert","lines":["https://imgc.artprintimages.com/img/print/classic-book-cover-collage_u-l-q19rm920.jpg?h=550&w=550"],"id":38}],[{"start":{"row":8,"column":125},"end":{"row":8,"column":126},"action":"remove","lines":[">"],"id":39},{"start":{"row":8,"column":124},"end":{"row":8,"column":125},"action":"remove","lines":["g"]},{"start":{"row":8,"column":123},"end":{"row":8,"column":124},"action":"remove","lines":["m"]},{"start":{"row":8,"column":122},"end":{"row":8,"column":123},"action":"remove","lines":["i"]},{"start":{"row":8,"column":121},"end":{"row":8,"column":122},"action":"remove","lines":["/"]},{"start":{"row":8,"column":120},"end":{"row":8,"column":121},"action":"remove","lines":["<"]}],[{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["i"],"id":40},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["d"]}],[{"start":{"row":8,"column":16},"end":{"row":8,"column":18},"action":"remove","lines":["id"],"id":41},{"start":{"row":8,"column":16},"end":{"row":8,"column":18},"action":"insert","lines":["id"]}],[{"start":{"row":8,"column":16},"end":{"row":8,"column":18},"action":"remove","lines":["id"],"id":42},{"start":{"row":8,"column":16},"end":{"row":8,"column":18},"action":"insert","lines":["id"]}],[{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":[" "],"id":43}],[{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"remove","lines":[" "],"id":44}],[{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["="],"id":45}],[{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"insert","lines":[" "],"id":46}],[{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"remove","lines":[" "],"id":47}],[{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"insert","lines":["r"],"id":48},{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"insert","lines":["e"]},{"start":{"row":8,"column":21},"end":{"row":8,"column":22},"action":"insert","lines":["g"]}],[{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"insert","lines":["i"],"id":49},{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"insert","lines":["m"]},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["g"]}],[{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":[" "],"id":50}],[{"start":{"row":32,"column":15},"end":{"row":32,"column":16},"action":"insert","lines":[" "],"id":51},{"start":{"row":32,"column":16},"end":{"row":32,"column":17},"action":"insert","lines":["i"]},{"start":{"row":32,"column":17},"end":{"row":32,"column":18},"action":"insert","lines":["d"]}],[{"start":{"row":32,"column":18},"end":{"row":32,"column":19},"action":"insert","lines":["="],"id":52},{"start":{"row":32,"column":19},"end":{"row":32,"column":20},"action":"insert","lines":["r"]}],[{"start":{"row":32,"column":20},"end":{"row":32,"column":21},"action":"insert","lines":["e"],"id":53}],[{"start":{"row":32,"column":21},"end":{"row":32,"column":22},"action":"insert","lines":["g"],"id":54},{"start":{"row":32,"column":22},"end":{"row":32,"column":23},"action":"insert","lines":["f"]},{"start":{"row":32,"column":23},"end":{"row":32,"column":24},"action":"insert","lines":["o"]},{"start":{"row":32,"column":24},"end":{"row":32,"column":25},"action":"insert","lines":["r"]},{"start":{"row":32,"column":25},"end":{"row":32,"column":26},"action":"insert","lines":["m"]}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"insert","lines":[" "],"id":55},{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"insert","lines":["i"]},{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"insert","lines":["d"]}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"insert","lines":[" "],"id":56}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"remove","lines":[" "],"id":57}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"insert","lines":["+"],"id":58}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"remove","lines":["+"],"id":59}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"insert","lines":["="],"id":60}],[{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"insert","lines":[" "],"id":61},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"insert","lines":["r"]},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"insert","lines":["f"],"id":62},{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":["N"]},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"insert","lines":["a"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":["m"]}],[{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"remove","lines":["m"],"id":63},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"remove","lines":["a"]},{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"remove","lines":["N"]},{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"remove","lines":["f"]}],[{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"insert","lines":["g"],"id":64},{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":["n"]},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"insert","lines":["a"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":["m"]},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":[" "],"id":65}],[{"start":{"row":4,"column":0},"end":{"row":6,"column":33},"action":"remove","lines":[" <h1 id= regname >Registration Form</h1>","","            <p>Register Today</p>"],"id":66}],[{"start":{"row":30,"column":63},"end":{"row":31,"column":14},"action":"insert","lines":["","              "],"id":67}],[{"start":{"row":31,"column":14},"end":{"row":33,"column":33},"action":"insert","lines":[" <h1 id= regname >Registration Form</h1>","","            <p>Register Today</p>"],"id":68}],[{"start":{"row":33,"column":12},"end":{"row":33,"column":33},"action":"remove","lines":["<p>Register Today</p>"],"id":69}],[{"start":{"row":33,"column":12},"end":{"row":33,"column":13},"action":"insert","lines":["<"],"id":70},{"start":{"row":33,"column":13},"end":{"row":33,"column":14},"action":"insert","lines":["p"]}],[{"start":{"row":33,"column":14},"end":{"row":33,"column":19},"action":"insert","lines":["></p>"],"id":71}],[{"start":{"row":33,"column":15},"end":{"row":33,"column":16},"action":"insert","lines":["S"],"id":72},{"start":{"row":33,"column":16},"end":{"row":33,"column":17},"action":"insert","lines":["i"]},{"start":{"row":33,"column":17},"end":{"row":33,"column":18},"action":"insert","lines":["g"]},{"start":{"row":33,"column":18},"end":{"row":33,"column":19},"action":"insert","lines":["n"]}],[{"start":{"row":33,"column":19},"end":{"row":33,"column":20},"action":"insert","lines":[" "],"id":73},{"start":{"row":33,"column":20},"end":{"row":33,"column":21},"action":"insert","lines":["u"]},{"start":{"row":33,"column":21},"end":{"row":33,"column":22},"action":"insert","lines":["p"]}],[{"start":{"row":33,"column":22},"end":{"row":33,"column":23},"action":"insert","lines":[" "],"id":74},{"start":{"row":33,"column":23},"end":{"row":33,"column":24},"action":"insert","lines":["f"]},{"start":{"row":33,"column":24},"end":{"row":33,"column":25},"action":"insert","lines":["o"]},{"start":{"row":33,"column":25},"end":{"row":33,"column":26},"action":"insert","lines":["r"]}],[{"start":{"row":33,"column":26},"end":{"row":33,"column":27},"action":"insert","lines":[" "],"id":75}],[{"start":{"row":33,"column":26},"end":{"row":33,"column":27},"action":"remove","lines":[" "],"id":76}],[{"start":{"row":33,"column":11},"end":{"row":33,"column":30},"action":"remove","lines":[" <p>Sign up for</p>"],"id":77}]]},"timestamp":1569901936339}