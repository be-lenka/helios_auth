#!/bin/bash
docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -t /local/resources -i /local/auth.json -g php -o /local/ -p licenseName="MIT" -p developerOrganization="BeLenka Dev" -p developerOrganizationUrl="https://www.belenka.com" -p composerPackageName=be-lenka/helios_auth -p invokerPackage=BeLenka\\Helios\\Auth --global-property appDescription="Helios Auth Package"

