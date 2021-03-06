
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PANEL DE ADMINISTRACIÓN DE INVENTARIOS | LOGIN</title>
        <style>
            body {
                color: #5B5B5F;
                font-family: "century_gothic";
                font-size: 12px;
                line-height: 20px;
            }
            .well, .checkout {
                background-color: #FFFFFF;
                border: 1px solid #E0E0E0;

                min-height: 20px;
                padding: 20px;
            }
            .row-fluid:before, .row-fluid:after {
                content: "";
                display: table;
                line-height: 0;
            }
            .row-fluid:after {
                clear: both;
            }
            .row-fluid:before, .row-fluid:after {
                content: "";
                display: table;
                line-height: 0;
            }
            .row-fluid {
                width: 100%;
            }
            .row-fluid [class*="span"]:first-child {
                margin-left: 0;
            }
            .row-fluid .span24 {
                width: 100%;
            }
            .row-fluid [class*="span"] {
                display: block;
                float: left;
                margin-left: 2.5641%;
                min-height: 30px;
                width: 100%;
            }
            .span24 {
                width: 1170px;
            }
            [class*="span"] {
                float: left;
                margin-left: 30px;
                min-height: 1px;
            }

            .password-recovery h1 {
                color: #3151A2;
            }
            h1, .h1 {
                color: #C11D7F;
                font-size: 29.16px;
                line-height: 38px;
                text-transform: uppercase;
            }
            h1, .h1, h2, .h2, .checkout .checkout-thx-message p, h3, .h3, h4, .h4, .item-details .item-shop-name, .box-details .item-shop-name, .item-details .item-shop-location, .box-details .item-shop-location {
                color: inherit;
                font-family: "essence_sans";
                font-weight: normal;
                line-height: 20px;
                margin: 0 0 10px;
                text-rendering: optimizelegibility;
            }

            .row-fluid:before, .row-fluid:after {
                content: "";
                display: table;
                line-height: 0;
            }
            .row-fluid:after {
                clear: both;
            }
            .row-fluid:before, .row-fluid:after {
                content: "";
                display: table;
                line-height: 0;
            }
            .row-fluid {
                width: 100%;
            }

            .row-fluid [class*="span"]:first-child {
                margin-left: 0;
            }
            .row-fluid .span24 {
                width: 100%;
            }
            .row-fluid [class*="span"] {
                display: block;
                float: left;
                margin-left: 2.5641%;
                min-height: 30px;
                width: 100%;
            }
            .span24 {
                width: 1170px;
            }


            form {
                margin: 0 0 20px;
            }

            fieldset {
                border: 0 none;
                margin: 0;
                padding: 0;
            }

            .password-recovery h4 {
                font-family: "century_gothic";
                font-weight: normal;
                margin-bottom: 20px;
            }
            h4, .h4, .item-details .item-shop-name, .box-details .item-shop-name, .item-details .item-shop-location, .box-details .item-shop-location {
                font-size: 14.58px;
                line-height: 20px;
                text-transform: none;
            }
            h1, .h1, h2, .h2, .checkout .checkout-thx-message p, h3, .h3, h4, .h4, .item-details .item-shop-name, .box-details .item-shop-name, .item-details .item-shop-location, .box-details .item-shop-location {
                color: inherit;
                font-family: "essence_sans";
                font-weight: normal;
                line-height: 20px;
                margin: 0 0 10px;
                text-rendering: optimizelegibility;
            }

            .password-recovery ul, .password-recovery li, .password-recovery .control-group, .password-recovery .controls, .password-recovery .help-block {
                display: inline-block;
            }
            .control-group {
                margin-bottom: 10px;
            }

            .form-search .required:after, .form-inline .required:after, .form-horizontal .required:after {
                content: "*";
            }
            .password-recovery label {
                margin-right: 10px;
            }
            .form-search label, .form-inline label, .form-search .btn-group, .form-inline .btn-group {
                display: inline-block;
            }
            label {
                display: block;
                margin-bottom: 5px;
            }
            label, input, button, select, textarea {
                font: 12px "century_gothic";
            }

            .password-recovery input {
                margin: 0 5px;
                min-height: 30px;
                padding: 5px 15px;
            }
            .form-search input, .form-search textarea, .form-search select, .form-search .help-inline, .form-search .uneditable-input, .form-search .input-prepend, .form-search .input-append, .form-inline input, .form-inline textarea, .form-inline select, .form-inline .help-inline, .form-inline .uneditable-input, .form-inline .input-prepend, .form-inline .input-append, .form-horizontal input, .form-horizontal textarea, .form-horizontal select, .form-horizontal .help-inline, .form-horizontal .uneditable-input, .form-horizontal .input-prepend, .form-horizontal .input-append {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle;
            }
            textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input, select {
                border: 1px solid #DCDCDC;
                transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;
            }
            select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
                color: #5B5B5F;
                display: inline-block;
                font-size: 12px;
                height: 20px;
                line-height: 20px;
                margin-bottom: 10px;
                padding: 4px 6px;
                vertical-align: middle;
            }
            .input-xlarge {
                width: 270px;
            }
            input, textarea, .uneditable-input {
                margin-left: 0;
            }
            input, textarea, .uneditable-input {
                width: 206px;
            }
            input, button, select, textarea {
                font-family: "century_gothic";
            }
            label, input, button, select, textarea {
                font: 12px "century_gothic";
            }
            button, input {
                line-height: normal;
            }
            button, input, select, textarea {
                font-size: 100%;
                margin: 0;
                vertical-align: middle;
            }

            .password-recovery ul, .password-recovery li, .password-recovery .control-group, .password-recovery .controls, .password-recovery .help-block {
                display: inline-block;
            }
            .password-recovery ul {
                margin: 0;
            }
            ul, ol {
                margin: 0 0 10px 25px;
                padding: 0;
            }

            .password-recovery ul, .password-recovery li, .password-recovery .control-group, .password-recovery .controls, .password-recovery .help-block {
                display: inline-block;
            }
            .password-recovery li {
                list-style: none outside none;
                margin-left: 10px;
            }
            li {
                line-height: 20px;
            }

            .btn:first-child, .button-go:first-child, .mod-new .button-new:first-child {
            }
            button.btn, button.button-go, .mod-new button.button-new, input.btn[type="submit"], input.button-go[type="submit"], .mod-new input.button-new[type="submit"] {
            }
            .btn-main {
                text-transform: uppercase;
            }
            .btn-medium {
                font-size: 15px;
                padding: 10px 15px;
            }
            .btn, .button-go, .mod-new .button-new {
                -moz-border-bottom-colors: none;
                -moz-border-left-colors: none;
                -moz-border-right-colors: none;
                -moz-border-top-colors: none;
                background-color: #3151A2;
                border-color: -moz-use-text-color -moz-use-text-color #B3B3B3;
                border-image: none;
                border-style: none;
                border-width: 0;
                color: #FFFFFF;
                cursor: pointer;
                display: inline-block;
                font-family: "century_gothic_bold";
                line-height: 20px;
                margin-bottom: 0;
                padding: 3px;
                text-align: center;
                text-transform: uppercase;
                vertical-align: middle;
            }
            input, button, select, textarea {
                font-family: "century_gothic";
            }
            label, input, button, select, textarea {
                font: 12px "century_gothic";
            }
            select, button, input[type="button"], input[type="reset"], input[type="submit"], input[type="radio"], input[type="checkbox"] {
                cursor: pointer;
            }
            button, html input[type="button"], input[type="reset"], input[type="submit"] {
                cursor: pointer;
            }
            button, input {
                line-height: normal;
            }
            button, input, select, textarea {
                font-size: 100%;
                margin: 0;
                vertical-align: middle;
            }
            label.error{
                background-color: #BC1010;
                border-radius: 4px;
                color: #FFFFFF;
                font-weight: bold;
                margin-left: -153px;
                margin-top: 7px;
                padding: 6px 12px;
                position: fixed;
            }
        </style>
    </head>
    <body>
        <div class="password-recovery">
            <div class="well">
                <div class="row-fluid">
                    <div class="span24">
                        <h1>Nueva contraseña</h1>
                    </div>

                    <div class="checkout-body row-fluid">
                        <div class="span24">
                            <form name="fancy_password_remember" method="post" action="javascript:void(0);" class="checkout-retrieve-pwd form-inline">
                                <fieldset>
                                    <h4>Recomenadamos modificar esta contraseña.</h4>
                                    <div class="control-group">
                                        <label class="control-label " for="fancy_password_remember_email">Usuario:</label>
                                        <div class="controls">
                                            {usuario}                                            
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="control-group">
                                        <label class="control-label " for="fancy_password_remember_email">Contraseña:</label>
                                        <div class="controls">
                                            {contrasena}                                            
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
