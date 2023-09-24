    <div class="breadcrumb" style="overflow:hidden;<?php echo $PageImage ? 'background-image:url(' . $PageImage . ')' : ''; ?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-inner">
                            <h1><?php echo $PageName; ?></h1>
                        </div>
                    </div>
                    <ul class="uk-breadcrumb mb-2">
                        <li class="d-inline-block"><a href="<?= $BasePath; ?>" >Home&nbsp;<i class="fas fa-angle-right"></i></a></li>
                        <li class="d-inline-block uk-active ms-2 "><span><?= $PageName; ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <style>
        .uk-breadcrumb {
            margin-left: 40px;
            margin-bottom: 70px;
            margin-top: -45px;
            position: relative;
            background: #ffc722;
        }

        .uk-breadcrumb {
            padding: 0;
            list-style: none;
            font-size: 0.001px;
        }

        .uk-breadcrumb:after {
            content: '';
            background: #ffc722;
            position: absolute;
            top: 0;
            bottom: 0;
            right: -1000%;
            left: 100%;
            display: block;
        }

        .uk-breadcrumb:before {
            content: '';
            background: rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 0;
            bottom: 0;
            left: -1000%;
            right: 100%;
            display: block;
        }

        .uk-breadcrumb>li {
            line-height: 45px;
        }

        .uk-breadcrumb>li:nth-child(n+2):before {
            content: '>';
            color: #fff;
        }

        .uk-breadcrumb>li:first-child>a {
            color: #363533;
        }

        .uk-breadcrumb>li:first-child {
            position: relative;
            z-index: 1;
        }

        .uk-breadcrumb>li:first-child:before {
            content: '';
            background: #ffc722;
            transform: skew(-33deg);
            -webkit-transform: skew(-33deg);
            position: absolute;
            left: -25px;
            top: 0;
            bottom: 0;
            width: 150%;
            z-index: -1;
        }

        .uk-breadcrumb>li:first-child>a:hover {
            color: #fff;
        }

        .uk-breadcrumb>li>a {
            color: #ffffff;
            font-size: 14px;
            font-family: 'Work Sans';
        }

        .uk-breadcrumb>li>a:hover {
            text-decoration: none;
            color: #363533;
        }

        .uk-breadcrumb>li:not(.uk-active)>span {
            color: #fff;
            font-family: 'Work Sans';
            font-size: 14px;
        }

        .uk-breadcrumb>li.uk-active span {
            font-family: 'Work Sans';
            font-size: 14px;
            color: #fff;
        }
    </style>