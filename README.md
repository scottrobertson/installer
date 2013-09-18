Ubuntu Installer
=

A tool to help with quickly setting up Ubuntu.

You can view a demo here: http://installer.scottymeuk.co.uk

Options
-
- Ubuntu Versions: 
  - 12.04 
  - 12.10 
  - 13.04 (coming soon)
- Web Server
  - Apache
  - Nginx
- Server Software
  - PHP
    - APC
    - MySQL
    - Memcache
    - MongoDB
    - GD
    - Curl
  - Python
    - virtualenv
  - Mysql
  - Memcached
  - MongoDB
- Version Control
  - Git
  - SVN
  - Mercurial/HG
- Miscellaneous
  - Zip
  - Make
  - Curl
  - g++
  - s3cmd

Contributing
-
- Fork
- Make Changes
- Test
- Update README.md
- Pull Request

Making changes
=
To add packages to existing sections you will need to add the html label in the specified section

####Example

    <label class="checkbox">
       Apache2 <input name="apache2" data-parts="apache2" data-trigger="apacheModules" data-container="#aptget" type="checkbox">
    </label>

Each input needs some data attributes which specify the package information.

####Data attributes

* `parts` - The install command for this package
* `trigger` - If an element needs to be shown after this is selected
* `container` - Which container to add the install command to
* `sources` - The element where the extra sources are held

####Containers

* `#aptget`
* `a2enmod`
* `pip`

####Sources

If this package requires sources, these should be added to a new element within the `#source-container` element.