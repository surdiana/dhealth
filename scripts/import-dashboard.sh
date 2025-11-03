#!/bin/bash

GRAFANA_URL="http://localhost:3001"
GRAFANA_USER="admin"
GRAFANA_PASSWORD="admin"
DASHBOARD_FILE="/home/surdiana/Project/dhealth/grafana/dashboards/system-metrics.json"

echo "Importing dashboard to Grafana..."

curl -X POST \
  -H "Content-Type: application/json" \
  -d @${DASHBOARD_FILE} \
  ${GRAFANA_URL}/api/dashboards/db \
  -u ${GRAFANA_USER}:${GRAFANA_PASSWORD}

echo ""
echo "Dashboard import completed!"