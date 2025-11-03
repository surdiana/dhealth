#!/bin/bash

GRAFANA_URL="http://localhost:3001"
GRAFANA_USER="admin"
GRAFANA_PASSWORD="admin"
DASHBOARD_FILE="/home/surdiana/Project/dhealth/grafana/dashboards/simple-dashboard.json"

echo "Importing simple dashboard to Grafana..."

RESPONSE=$(curl -s -X POST \
  -H "Content-Type: application/json" \
  -d @${DASHBOARD_FILE} \
  ${GRAFANA_URL}/api/dashboards/db \
  -u ${GRAFANA_USER}:${GRAFANA_PASSWORD})

echo "Response: $RESPONSE"

if echo "$RESPONSE" | grep -q '"status":"success"'; then
  echo "Dashboard imported successfully!"
  DASHBOARD_URL=$(echo "$RESPONSE" | grep -o '"url":"[^"]*"' | head -1 | cut -d'"' -f4)
  echo "Dashboard available at: ${GRAFANA_URL}${DASHBOARD_URL}"
else
  echo "Dashboard import failed"
fi