<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Reservation Details</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            min-width: 100%!important;
        }

        .content {
            width: 100%;
            max-width: 600px;
            border: 1px solid #f5eddb;
        }

        .main {
            padding: 30px 0;
            color: #acbac4;
            line-height: 20px;
            font-family: sans-serif;
        }

        .main a {
            color: #acbac4;
            text-decoration: none;
        }

        .eheader {
            padding: 20px;
        }

        .innerpadding {
            padding: 30px;
        }

        .borderbottom {
            border-bottom: 1px solid #e6eff2;
        }

        .title {
            text-align: center;
            text-transform: uppercase;
        }

        .title a {
            font-size: 30px;
            line-height: 40px;
            color: #fff;
        }

        .subhead {
            text-align: center;
            font-size: 12px;
            color: #fff;
        }

        .h1 {
            text-align: center;
            font-size: 30px;
            color: #fff;
        }

        .h2 {
            padding: 0 0 15px 0;
            font-size: 16px;
            line-height: 28px;
            font-weight: bold;
        }

        .h3 {
            font-size: 15px;
            text-decoration: underline;
        }

        .bodycopy {
            font-size: 14px;
            line-height: 22px;
        }

        .details {
            font-size: 14px;
        }

        .mssg {
            font-size: 12px;
        }

        .footer {
            padding: 20px 30px 15px 30px;
            border-top: 1px solid #f2f2f2;
        }

        .footer a {
            color: #edcb9a;
        }

        .footercopy {
            font-size: 15px;
            color: #777777;
        }

        .footercopy a {
            color: #edcb9a;
        }

        .social a {
            font-size: 14px;
        }

        table tr td {
          padding: 3px 0;
        }

@media screen and (max-width: 600px) { .main { padding: 0; } }

    </style>


</head>

<body yahoo bgcolor="#f5eddb">


    <table width="100%" bgcolor="#f5eddb" class="main" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>

                <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td bgcolor="#edcb9a" class="eheader">

                            <table class="col425" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                <tr>
                                    <td height="70">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td class="title" style="padding: 5px 0 0 0;">
                                                    <a href="{{ env('APP_URL') }}">{{ env('APP_NAME') }}</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="subhead" style="padding: 0 0 0 3px;">
                                                    Editor logs
                                                </td>
                                            </tr>


                                        </table>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                    <tr>
                        <td class="innerpadding borderbottom">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="h2">
                                        Hello Admin,
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bodycopy">
                                        Editor {{ $name }} has deposed a new request about room {{ $room->name }} in the mailbox
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="innerpadding borderbottom">

                            Check the mail at : <a style="color:blue" href="{{ env('APP_URL') . '/dashboard/mailbox' }}">this address</a>
                            <br>
                            Link of the room : <a href="{{ env('APP_URL') . '/dashboard/room/' . $room->id }}"></a>

                        </td>
                    </tr>


                    <tr>
                        <td class="footer" bgcolor="#f7f8f9">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center" class="footercopy">
                                        &#169; 2018 <a href="%site_url%">{{ env('APP_NAME') }}</a> All Rights Reserved.
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" class="social" style="padding: 10px 0 0 0;">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                                    <a href="%facebook_link%">
                                                        facebook
                                                    </a>
                                                </td>
                                                <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                                    <a href="%twitter_link%">
                                                        twitter
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</body>

</html>
