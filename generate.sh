#!/bin/bash
docker run --user $(id -u):$(id -g) --rm -v ${PWD}:/local openapitools/openapi-generator-cli:v7.0.0 generate -t /local/resources -i /local/auth.json -g php -o /local/ -p licenseName="MIT" -p developerOrganization="BeLenka Dev" -p developerOrganizationUrl="https://www.belenka.com" -p composerPackageName=be-lenka/helios_auth -p invokerPackage=BeLenka\\Helios\\Auth

find "lib/" -type f -name '*.php' -print0 | while IFS= read -r -d '' file
do
    # Use sed to replace the text '\GuzzleHttp\Utils::jsonEncode' with 'json_encode'
    sed -i 's/\\GuzzleHttp\\Utils::jsonEncode/json_encode/g' "$file"
    echo "Replaced in: $file"
done

echo "Replacement complete."