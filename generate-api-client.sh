#!/bin/bash

mv package.json package.json.bak

openapi-generator generate -i swagger.yaml -g javascript -o . -c config.json

rm -rf ./docs/
rm git_push.sh
rm .openapi-generator-ignore
rm .travis.yml

shopt -s extglob
cd test
rm -rf model
cd api
rm -fv !(TokenizeApi.spec.js)
cd ../..

mv package.json.bak package.json