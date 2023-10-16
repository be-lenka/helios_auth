#!/bin/bash
docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -i /local/auth.json -g php -o /local/ -p developerOrganization=belenka -p composerPackageName=belenka/helios_auth -p invokerPackage=BeLenka\\Helios\\Auth
