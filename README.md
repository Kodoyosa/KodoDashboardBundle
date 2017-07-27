Kodo's Dashboard
=========

Dashboard Bundle for symfony >= 3.3

####Requirement :

(for both following requirement, see 3. for configuration example)

- Assetic bundle :

    `composer require symfony/assetic-bundle`
    
- twitter/bootstrap vendors

    add `"twitter/bootstrap": "3.*"` to your composer.json


####Steps :

1) Add `["Kodo\\": "src/Kodo"]` to your composer.json

2) `php bin/console doctrine:schema:update --force`

3) Assetic configuration in config.yml
    
        # Assetic Configuration
        assetic:
            debug:          "%kernel.debug%"
            use_controller: false
        #    bundles:        [ '*Place your bundle names here*' ]
        
            filters:
                cssrewrite: ~
            assets:
                bootstrap_js:
                    inputs:
                        - '%kernel.root_dir%/../vendor/twitter/bootstrap/dist/js/bootstrap.js'
                bootstrap_css:
                    inputs:
                        - '%kernel.root_dir%/../vendor/twitter/bootstrap/dist/css/bootstrap.css'
                        - '%kernel.root_dir%/../vendor/twitter/bootstrap/dist/css/bootstrap-theme.css'
        #            filters: [cssrewrite]
        
                bootstrap_glyphicons_ttf:
                    inputs:
                        - '%kernel.root_dir%/../vendor/twitter/bootstrap/dist/fonts/glyphicons-halflings-regular.ttf'
                    output: "fonts/glyphicons-halflings-regular.ttf"
                bootstrap_glyphicons_eot:
                    inputs:
                        - '%kernel.root_dir%/../vendor/twitter/bootstrap/dist/fonts/glyphicons-halflings-regular.eot'
                    output: "fonts/glyphicons-halflings-regular.eot"
                bootstrap_glyphicons_svg:
                    inputs:
                        - '%kernel.root_dir%/../vendor/twitter/bootstrap/dist/fonts/glyphicons-halflings-regular.svg'
                    output: "fonts/glyphicons-halflings-regular.svg"
                bootstrap_glyphicons_woff:
                    inputs:
                        - '%kernel.root_dir%/../vendor/twitter/bootstrap/dist/fonts/glyphicons-halflings-regular.woff'
                    output: "fonts/glyphicons-halflings-regular.woff"
        
                jquery:
                    inputs:
                        - 'https://code.jquery.com/jquery-3.2.1.min.js'
                        
4) run `php bin/console assetic:dump
`

5) (optionnal) Change `prefix:   /` in /app/config/routing.yml for the Dashboard bundle depending on your project security configuration