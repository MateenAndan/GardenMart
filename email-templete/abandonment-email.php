<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <title>Voxo | Email template </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <style type="text/css">
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: 'Public Sans', sans-serif;
            background-color: #e2e2e2;
            display: block;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
        }

        .theme-color {
            color: #0DA487;
        }

        .text-center {
            text-align: center
        }

        .header-table {
            padding: 10px 0;
            background-color: #F7F7F7;
        }


        .header .header-logo a {
            display: block;
            margin: 0;
            text-align: center;
        }

        .product-table thead tr th {
            padding: 0;
            padding-bottom: 13px;
            border-bottom: 1px solid rgba(217, 217, 217, 0.5);
            font-size: 17px;
            font-weight: 600;
        }

        .product-table thead tr th:first-child {
            text-align: left;
        }

        .product-table thead tr th:nth-child(n+2) {
            text-align: right;
        }

        .product-table tbody tr td {
            padding: 11px 0;
            border-bottom: 1px solid rgba(217, 217, 217, 0.5);
        }

        .product-table tbody tr td:first-child {
            padding-left: 23px;
        }

        .product-table tbody tr:last-child td {
            border-bottom: none;
        }

        .product-table tbody tr td:nth-child(n+2) {
            text-align: right;
        }

        .product-table tbody tr td .product-detail h5 {
            margin: 0;
            font-size: 15px;
            font-weight: 600;
            margin-left: 19px;
            color: #222222;
        }

        .product-table tbody tr td h5 {
            margin: 0;
            font-size: 15px;
            font-weight: 600;
        }

        .product-table tbody tr td h5 span {
            color: #939393;
        }

        .product-table tbody tr td .product-detail {
            display: flex;
            align-items: center;
        }

        .checkout-button {
            margin: 35px 0;
            font-size: 20px;
            font-weight: 700;
            padding: 14px 30px;
            border: none;
            border-radius: 6px;
            background-color: #0DA487;
            color: #fff;
            display: inline-block;
        }

        .footer-table {
            position: relative;
        }

        .footer-table::before {
            position: absolute;
            content: "";
            background-image: url(images/footer-left.svg);
            background-position: top right;
            top: 0;
            left: -71%;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            z-index: -1;
            background-size: contain;
            opacity: 0.3;
        }

        .footer-table::after {
            position: absolute;
            content: "";
            background-image: url(images/footer-right.svg);
            background-position: top right;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            z-index: -1;
            background-size: contain;
            opacity: 0.3;
        }
    </style>
</head>

<body style="margin: 20px auto;">
    <table align="center" border="0" cellpadding="0" cellspacing="0"
        style="background-color: white; width: 100%; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);">
        <tbody>
            <tr>
                <td>
                    <table class="header-table" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr class="header" style="display: flex;align-items: center;justify-content: space-around;">
                            <td>
                                <ul>
                                    <li style="font-size: 14px;">
                                        <a href="../front-end/index.html" style="color: #252525;">Home</a>
                                    </li>
                                    <li style="margin-left: 21px; font-size: 14px;">
                                        <a href="../front-end/wishlist.html" style="color: #252525;">Wishlist</a>
                                    </li>
                                </ul>
                            </td>

                            <td class="header-logo" style="text-align: center; display: block;" align="top">
                                <a href="../front-end/index.html">
                                    <img src="images/logo.png" alt="" class="main-logo">
                                </a>
                            </td>

                            <td>
                                <ul>
                                    <li style="font-size: 14px;">
                                        <a href="../front-end/cart.html" style="color: #252525;">My Cart</a>
                                    </li>
                                    <li style="margin-left: 21px; font-size: 14px;">
                                        <a href="../front-end/contact-us.html" style="color: #252525;">Contact</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>

                    <table class="content-table" style="margin-top: 28px;" align="center" cellpadding="0"
                        cellspacing="0" width="100%">
                        <tbody>
                            <tr class="content-tr text-center">
                                <td style="display: block;">
                                    <h3
                                        style="font-size: 21px; font-weight: 700; text-transform: capitalize; margin: 0;">
                                        Still interested?</h3>
                                    <p style="font-size: 16px; font-weight: 500; color: #939393; margin: 15px 0 0;">Your
                                        cart has items left in it. Check em out now!</p>
                                </td>

                                <td style="display: block; margin-top: 30px;">
                                    <img src="images/abandonment-poster.png" style="width: 100%;" alt=""
                                        class="main-logo">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="product-table"
                        style="width: 100%; margin-top: 28px; padding: 0 28px; border-spacing: 0;">
                        <thead>
                            <tr class="content-tr">
                                <th>Shipped Items</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <div class="product-detail">
                                        <img src="images/product-1.png" alt="">
                                        <h5>Butter Croissant#1</h5>
                                    </div>
                                </td>

                                <td>
                                    <h5>QTY: <span>01</span></h5>
                                </td>
                                <td>
                                    <h5>Price: <span>$35.00</span></h5>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="product-detail">
                                        <img src="images/product-2.png" alt="">
                                        <h5>Spicy potato Chips#2</h5>
                                    </div>
                                </td>

                                <td>
                                    <h5>QTY: <span>01</span></h5>
                                </td>
                                <td>
                                    <h5>Price: <span>$35.00</span></h5>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="product-detail">
                                        <img src="images/product-3.png" alt="">
                                        <h5>healthy long life milk</h5>
                                    </div>
                                </td>

                                <td>
                                    <h5>QTY: <span>01</span></h5>
                                </td>
                                <td>
                                    <h5>Price: <span>$35.00</span></h5>
                                </td>
                            </tr>
                        </tbody>

                        <tfoot style="background-color: #f7f7f7;">
                            <tr>
                                <td style="padding: 24px 27px; text-align: left; font-size: 15px; font-weight: 600;"
                                    colspan="2">Grand Total:</td>
                                <td style="padding: 24px 27px; text-align: right; font-size: 15px; font-weight: 600;"
                                    class="theme-color">$ 2000</td>
                            </tr>
                        </tfoot>
                    </table>

                    <table class="coupon-table" style="margin-top: 28px; padding: 0 23px;" cellpadding="0"
                        cellspacing="0" width="100%">
                        <tbody>
                            <tr>
                                <td style="display: block;">
                                    <div class="coupon-box"
                                        style="display: flex; align-items: center; justify-content: space-between;">
                                        <div class="coupon-detail">
                                            <h2
                                                style="font-size: 40px; font-weight: 900; margin: 0; font-family: 'Nunito Sans', sans-serif;">
                                                SAVE <span class="theme-color">XX</span>%</h2>
                                            <h6 style="font-size: 18px; font-weight: 600; color: #939393; font-family:
                                                'Nunito Sans', sans-serif; margin: 8px 0 0;">
                                                On your purchase today!</h6>
                                        </div>

                                        <div class="coupon-code">
                                            <h3 style="font-weight: 600; font-size: 18px; border: 1px dashed #BDBDBD;
                                                padding: 15px 52px; border-radius: 50px; font-family: 'Nunito Sans',
                                                sans-serif; margin: 0;">
                                                Use Coupon: XXXXXRTB</h3>
                                        </div>
                                    </div>
                                </td>

                                <td style="display: block;">
                                    <a href="javascript:void(0)" class="checkout-button">Complete Checkout</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="text-center footer-table" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
        style="background-color: #282834; color: white; padding: 24px; overflow: hidden; z-index: 0;">
        <tr>
            <td>
                <table border="0" cellpadding="0" cellspacing="0" class="footer-social-icon text-center" align="center"
                    style="margin: 8px auto 20px;">
                    <tr>
                        <td style="font-size: 19px; font-weight: 700;">Shop For <span
                                class="theme-color">Fastkart</span></td>
                    </tr>
                </table>
                <table border="0" cellpadding="0" cellspacing="0" class="footer-social-icon text-center" align="center"
                    style="margin: 8px auto 20px;">
                    <tr>
                        <td>
                            <a href="javascript:void(0)"
                                style="font-size: 14px; font-weight: 600; color: #fff; text-decoration: underline; text-transform: capitalize;">Contact
                                Us</a>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                style="font-size: 14px; font-weight: 600; color: #fff; text-decoration: underline; text-transform: capitalize; margin-left: 20px;">unsubscribe</a>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                style="font-size: 14px; font-weight: 600; color: #fff; text-decoration: underline; text-transform: capitalize; margin-left: 20px;">privacy
                                Policy</a>
                        </td>
                    </tr>
                </table>
                <table border="0" cellpadding="0" cellspacing="0" class="footer-social-icon text-center" align="center"
                    style="margin: 23px auto;">
                    <tr>
                        <td>
                            <a href="www.facebook.com">
                                <img src="images/fb.png"
                                    style="font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="www.twitter.com">
                                <img src="images/twitter.png"
                                    style="font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="www.instagram.com">
                                <img src="images/insta.png"
                                    style="font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="www.pinterest.com">
                                <img src="images/pinterest.png"
                                    style="font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);" alt="">
                            </a>
                        </td>
                    </tr>
                </table>
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td>
                            <h5 style="font-size: 13px; text-transform: uppercase; margin: 0; color:#ddd;
                                letter-spacing:1px; font-weight: 500;">Want to change how you receive these emails?
                            </h5>
                            <h5 style="font-size: 13px; text-transform: uppercase; margin: 10px 0 0; color:#ddd;
                                letter-spacing:1px; font-weight: 500;">2021-22 copy right by themeforest powerd by
                                pixelstrap</h5>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>