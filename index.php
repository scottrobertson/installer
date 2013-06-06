<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>
            Installer
        </title>

        <link href="//netdna.bootstrapcdn.com/bootswatch/2.1.1/united/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet" type="text/css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <style>

        .navbar .brand {
           transition: color .25s ease-in-out;
           -moz-transition: color .25s ease-in-out;
           -webkit-transition: color .25s ease-in-out;
        }

        .navbar .brand:hover {
            color: #f09609;
        }

        .navbar .navbar-inner {
            border-radius: 0px
        }

        #installer {
            background:#fff;
            padding:10px;
            border-radius:5px;
            box-shadow:inset 0 0 1px #000000;
        }

        </style>

    </head>
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <div>
                        <a class="brand" href="/"><i class="icon-cloud-download"></i> Installer</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="well sidebar-nav">
                        <p>
                            <b>Ubuntu Version</b>
                            <br />
                            <input type="radio" name="version" value="12.04"> 12.04<br>
                            <input type="radio" name="version" value="12.10"> 12.10
                        </p>

                        <div id="options" style="display:none">

                            <p>
                                <b>Web Server</b>
                                <label class="checkbox">
                                   Apache2 <input data-parts="apache2-install,apache-modules,apache-modules-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   Nginx <input id="nginx" data-callback="installer.php" data-parts="nginx-source,nginx-install" type="checkbox">
                                </label>
                            </p>

                            <p id="apache-modules" style="display:none">
                                <b>Apache Modules</b>

                                <label class="checkbox">
                                   Rewrite <input data-parts="apache-rewrite-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   Deflate <input data-parts="apache-deflate-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   Headers <input data-parts="apache-headers-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   Expires <input data-parts="apache-expires-install" type="checkbox">
                                </label>
                            </p>

                            <p>
                                <b>Server Software</b>
                                <label class="checkbox">
                                   PHP <input id="php" data-callback="installer.php" data-parts="php5-install,php-extensions,php-extensions-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   Python <input data-parts="python-install,python-packages,python-packages-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   MySQL Server <input data-parts="mysql-server-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   Memcached <input data-parts="memcached-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   MongoDB <input data-parts="mongodb-source,mongodb-install" type="checkbox">
                                </label>
                            </p>

                            <p>
                                <b>Version Control</b>
                                <label class="checkbox">
                                   Git <input data-parts="git-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   SVN <input data-parts="subversion-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   Mercurial/HG <input data-parts="mercurial-install" type="checkbox">
                                </label>
                            </p>

                            <p id="php-extensions" style="display:none">
                                <b>PHP Extensions</b>

                                <label class="checkbox">
                                   APC <input data-parts="php-apc-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   MySQL <input data-parts="php-mysql-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   Memcache <input data-parts="php-memcache-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   MongoDB <input data-parts="php-mongodb-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   GD <input data-parts="php-gd-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   Curl <input data-parts="php-curl-install" type="checkbox">
                                </label>
                            </p>

                            <p id="python-packages" style="display:none">
                                <b>Python Packages</b>

                                <label class="checkbox">
                                   virtualenv <input data-parts="python-virtualenv-install" type="checkbox">
                                </label>
                            </p>

                            <p>
                                <b>Miscellaneous</b>
                                <label class="checkbox">
                                   Zip <input data-parts="misc-zip-install" type="checkbox">
                                </label>
                                <label class="checkbox">
                                   Make <input data-parts="misc-make-install" type="checkbox">
                                </label>
                                <label class="checkbox">
                                   Curl <input data-parts="misc-curl-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   g++ <input data-parts="misc-g-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   s3cmd <input data-parts="s3cmd-source,misc-s3cmd-install" type="checkbox">
                                </label>

                                <label class="checkbox">
                                   Composer <input data-parts="composer-source,misc-composer-install" name="composer" type="checkbox">
                                </label>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="span9">
                    <div class="well">

                        <div id="none_selected">
                            <h1 class="lead">Installer</h1>
                            <p>
                                Easily install all the software you need on your Ubuntu server. To get started, please select your ubuntu version.
                            </p>

                        </div>

                        <div id="installer" style="display:none">

                            <div id="nginx-source" style="display:none">
                                # Update Nginx Sources<br />
                                wget http://nginx.org/keys/nginx_signing.key<br />
                                apt-key add nginx_signing.key<br />
                                echo "deb http://nginx.org/packages/ubuntu/ <span class="ubuntu-branch"></span> nginx<br />
                                deb-src http://nginx.org/packages/ubuntu/ <span class="ubuntu-branch"></span> nginx" > /etc/apt/sources.list.d/nginx.list<br /><br />
                            </div>

                            <div id="mongodb-source" style="display:none">
                                # Update MongoDB Sources<br />
                                apt-key adv --keyserver keyserver.ubuntu.com --recv 7F0CEB10<br />
                                echo "deb http://downloads-distro.mongodb.org/repo/ubuntu-upstart dist 10gen" > /etc/apt/sources.list.d/10gen.list<br /><br />
                            </div>

                            <div id="s3cmd-source" style="display:none">
                                # Update s3cmd Sources<br/>
                                wget -O- -q http://s3tools.org/repo/deb-all/stable/s3tools.key | sudo apt-key add -<br />
                                wget -O/etc/apt/sources.list.d/s3tools.list http://s3tools.org/repo/deb-all/stable/s3tools.list<br /><br />
                            </div>

                            <div id="composer-source" style="display:none">
                                # Update composer Sources<br/>
                                curl -sS https://getcomposer.org/installer | php<br />
                                mv composer.phar /usr/local/bin/composer
                            </div>

                            <div id="apt-get" style="display:inline-block">
                                # Update apt<br />
                                apt-get update<br /><br />

                                # Run the install<br />
                                apt-get install -y
                            </div>
                            <!-- Server Software -->
                            <span id="nginx-install" style="display:none">
                                 nginx
                            </span>

                            <span id="apache2-install" style="display:none">
                                 apache2
                            </span>

                            <span id="php5-install" style="display:none">
                                 php5
                            </span>

                            <span id="mysql-server-install" style="display:none">
                                 mysql-server
                            </span>

                            <span id="memcached-install" style="display:none">
                                 memcached
                            </span>

                            <span id="mongodb-install" style="display:none">
                                 mongodb-10gen
                            </span>

                            <span id="php5-install" style="display:none">
                                 php5
                            </span>

                            <span id="php5-fpm-install" style="display:none">
                                 php5-fpm
                            </span>

                            <span id="python-install" style="display:none">
                                 python python-pip
                            </span>

                            <!-- Version Control -->
                            <span id="git-install" style="display:none">
                                 git
                            </span>

                            <span id="subversion-install" style="display:none">
                                 subversion
                            </span>

                            <span id="mercurial-install" style="display:none">
                                 mercurial
                            </span>

                            <!-- PHP Extensions -->
                            <span id="php-extensions-install" style="display:none">
                                <span id="php-apc-install" style="display:none">
                                     php-apc
                                </span>

                                <span id="php-memcache-install" style="display:none">
                                     php5-memcache
                                </span>

                                <span id="php-mongodb-install" style="display:none">
                                     php5-mongo
                                </span>

                                <span id="php-mysql-install" style="display:none">
                                     php5-mysql
                                </span>

                                <span id="php-gd-install" style="display:none">
                                     php5-gd
                                </span>

                                <span id="php-curl-install" style="display:none">
                                     php5-curl
                                </span>
                            </span>

                            <!-- Miscellaneous -->
                            <span id="misc-zip-install" style="display:none">
                                 zip
                            </span>

                            <span id="misc-make-install" style="display:none">
                                 make
                            </span>

                            <span id="misc-curl-install" style="display:none">
                                 curl
                            </span>

                            <span id="misc-g-install" style="display:none">
                                 g++
                            </span>

                            <span id="misc-s3cmd-install" style="display:none">
                                s3cmd
                            </span>

                            <!-- Python Packages -->
                            <span id="python-packages-install" style="display:none">
                                <br /><br />
                                <span id="python-virtualenv-install" style="display:none">
                                     pip install virtualenv
                                </span>
                            </span>

                            <!-- Apache Mods -->
                            <span id="apache-modules-install" style="display:none">

                                <span id="a2enmod" style="display:none">
                                    <br /><br />
                                    # Apache Modules <br />
                                    a2enmod
                                </span>

                                <span id="apache-rewrite-install" style="display:none">
                                     rewrite
                                </span>

                                <span id="apache-deflate-install" style="display:none">
                                      deflate
                                </span>

                                <span id="apache-headers-install" style="display:none">
                                      headers
                                </span>

                                <span id="apache-expires-install" style="display:none">
                                      expires
                                </span>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <a href="https://github.com/Scottymeuk/installer"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.min.js " type="text/javascript"></script>

        <script>
        $(document).ready(function() {

            var selectedInstalls = 0;

            $('input[type=radio]').on('click', function() {

                $('#options').fadeIn();

                var version = $(this).val();

                if (version === '12.04') {
                    $('.ubuntu-branch').text('precise');
                } else {
                    $('.ubuntu-branch').text('quantal');
                }

            });

            $('input[type=checkbox]').on('change', function() {
                var elements = $(this).data('parts').split(',');
                $.each(elements, function(index, value) {
                    $('#' + value).toggle();
                });

                if (this.checked) {
                    if (this.getAttribute('name') !== 'composer')
                        $('#apt-get').show();

                    selectedInstalls++;
                } else {
                     if (this.getAttribute('name') !== 'composer' && selectedInstalls > 0)
                        $('#apt-get').hide();

                    selectedInstalls--;
                }

                if (selectedInstalls > 0) {
                    $('#installer').show();
                    $('#none_selected').hide();
                } else {
                    $('#installer').hide();
                    $('#none_selected').show();
                }

                var a2enmods = $('#apache-modules-install span:visible').not('#a2enmod').length;

                if (a2enmods > 0) {
                    $('#a2enmod').show();
                } else {
                    $('#a2enmod').hide();
                }

                if ($(this).data('callback')) {

                    var parts = $(this).data('callback').split('.'), method = window;

                    $(parts).each(function () {
                        method = method[this];
                    });

                    method($(this));
                }


            });
        });

        var installer = {
            php : function (data) {

                if ($('#nginx:checked').length > 0 && $('#php:checked').length > 0) {
                    $('#php5-fpm-install').show();
                } else {
                    $('#php5-fpm-install').hide();
                }

            }
        }

        </script>

    </body>
</html>
