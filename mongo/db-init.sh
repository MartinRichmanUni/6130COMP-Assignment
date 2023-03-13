#!/bin/bash

DELAY=30

sleep 20

mongo --host mongo_1:27017 <<EOF
var config = {
    "_id": "rs0",
    "version": 1,
    "members": [
        {
            "_id": 1,
            "host": "mongo_1:27017",
            "priority": 2
        },
        {
            "_id": 2,
            "host": "mongo_2:27017",
            "priority": 1
        }
    ]
};
rs.initiate(config, { force: true });
EOF

echo "Waiting for configuration to be applied. Please wait ${DELAY} seconds"

sleep $DELAY

mongo --host mongo_1:27017 < /mongo/init.js
