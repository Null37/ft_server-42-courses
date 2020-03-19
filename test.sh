#!/bin/bash

docker build -t zero .
docker run -p 80:80 -p 443:443 -d zero /bin/bash
