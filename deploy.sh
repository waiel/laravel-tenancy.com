#!/usr/bin/env bash

yarn generate

scp -r dist/* hamburg.hyn.me:/domains/laravel-tenancy.com/public/

rm -rf dist
