# symfonyOsmLoginSample

This is a Symfony Project based on the AppBundle. It uses the HWI/OAuthBundle for OAuth via OSM. 

This project served to learn the OAuth functionality and Symfony for myself.

## Requirements
For use this sample you only need an up to date php and a working composer (see https://getcomposer.org/).

## Install and Using

1. Clone the project: `git clone https://github.com/britiger/symfonyOsmLoginSample.git`
2. Change directory: `cd symfonyOsmLoginSample`
3. Install all dependencies: `composer install`
4. Start the server: `php app/console server:start`
5. Call the shown URL in your browser `http://127.0.0.1:8000/`
6. Now you debug toolbar shows that you're Anonymous
7. Call `http://127.0.0.1:8000/login` an click on osm_provider
8. Login on OSM and grand access for the application
9. You will redirect to you local page
10. Now you can see your Username in the debug toolbar

