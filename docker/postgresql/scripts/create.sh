#!/bin/bash
psql -Upostgres deswebii < ./docker-entrypoint-initdb.d/database.sql