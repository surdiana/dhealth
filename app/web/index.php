<?php
echo "<!DOCTYPE html>\n";
echo "<html>\n<head>\n";
echo "    <title>Yii 2.0 Demo - DHealth Project</title>\n";
echo "    <style>\n";
echo "        body { font-family: Arial, sans-serif; margin: 40px; background: #f5f5f5; }\n";
echo "        .container { max-width: 800px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }\n";
echo "        .header { text-align: center; color: #2c3e50; margin-bottom: 30px; }\n";
echo "        .status { background: #27ae60; color: white; padding: 10px; border-radius: 4px; margin: 10px 0; }\n";
echo "        .info { background: #ecf0f1; padding: 15px; border-radius: 4px; margin: 10px 0; }\n";
echo "        .footer { text-align: center; margin-top: 30px; color: #7f8c8d; }\n";
echo "        .metric { background: #e8f4fd; padding: 15px; border-radius: 4px; margin: 10px 0; border-left: 4px solid #3498db; }\n";
echo "        .dashboard-link { background: #f39c12; color: white; padding: 15px; border-radius: 4px; margin: 10px 0; text-align: center; }\n";
echo "        .dashboard-link a { color: white; text-decoration: none; font-weight: bold; font-size: 18px; }\n";
echo "    </style>\n";
echo "</head>\n<body>\n";
echo "    <div class='container'>\n";
echo "        <div class='header'>\n";
echo "            <h1>DHealth Project - Yii 2.0 Application</h1>\n";
echo "            <h2>Infrastructure Monitoring System</h2>\n";
echo "        </div>\n";
echo "\n";
echo "        <div class='dashboard-link'>\n";
echo "            <a href='http://localhost:3001/d/af2yydlt7i77ka/dhealth-system-monitoring' target='_blank'>\n";
echo "                📊 Open System Monitoring Dashboard\n";
echo "            </a>\n";
echo "        </div>\n";
echo "\n";
echo "        <div class='status'>\n";
echo "            <h3>Application Status: RUNNING</h3>\n";
echo "            <p>PHP Version: " . phpversion() . "</p>\n";
echo "            <p>Server Time: " . date('Y-m-d H:i:s') . "</p>\n";
echo "        </div>\n";
echo "\n";
echo "        <div class='info'>\n";
echo "            <h3>Available Services:</h3>\n";
echo "            <ul>\n";
echo "                <li><strong>Yii 2.0 App</strong>: This page (Port 80)</li>\n";
echo "                <li><strong>Grafana Dashboard</strong>: <a href='http://localhost:3001'>http://localhost:3001</a> (admin/admin)</li>\n";
echo "                <li><strong>System Monitoring</strong>: <a href='http://localhost:3001/d/af2yydlt7i77ka/dhealth-system-monitoring' target='_blank'>Full Dashboard</a></li>\n";
echo "                <li><strong>Prometheus</strong>: <a href='http://localhost:9090'>http://localhost:9090</a></li>\n";
echo "                <li><strong>PostgreSQL DB</strong>: Running on port 5432</li>\n";
echo "            </ul>\n";
echo "        </div>\n";
echo "\n";
echo "        <div class='info'>\n";
echo "            <h3>Monitoring Metrics Available:</h3>\n";
echo "            <div class='metric'><strong>CPU Usage (%)</strong> - Real-time CPU utilization per container</div>\n";
echo "            <div class='metric'><strong>Memory Usage (%)</strong> - RAM consumption analysis</div>\n";
echo "            <div class='metric'><strong>Disk Usage (%)</strong> - Storage space utilization</div>\n";
echo "            <div class='metric'><strong>Network I/O</strong> - Network traffic in bits/second</div>\n";
echo "            <div class='metric'><strong>System Load Average</strong> - 1m, 5m, 15m load averages</div>\n";
echo "            <div class='metric'><strong>Filesystem Inodes</strong> - File system health monitoring</div>\n";
echo "        </div>\n";
echo "\n";
echo "        <div class='info'>\n";
echo "            <h3>Infrastructure Components:</h3>\n";
echo "            <ul>\n";
echo "                <li>Ubuntu Latest + PHP-FPM 8.1</li>\n";
echo "                <li>PostgreSQL Database (Persistent Volume)</li>\n";
echo "                <li>NGINX Reverse Proxy</li>\n";
echo "                <li>Prometheus Monitoring</li>\n";
echo "                <li>Grafana Dashboard with Custom Metrics</li>\n";
echo "                <li>Node Exporters (4 instances)</li>\n";
echo "            </ul>\n";
echo "        </div>\n";
echo "\n";
echo "        <div class='info'>\n";
echo "            <h3>Database Test:</h3>\n";
echo "            <p>Testing PostgreSQL connection...</p>\n";
try {
    $pdo = new PDO(
        'pgsql:host=db;dbname=yii2db',
        'yii2user',
        'supersecretpassword'
    );
    echo "<p style='color: green;'>Database Connection: SUCCESS</p>\n";
    $stmt = $pdo->query('SELECT version()');
    $version = $stmt->fetchColumn();
    echo "<p>PostgreSQL: " . substr($version, 0, 50) . "...</p>\n";
} catch (PDOException $e) {
    echo "<p style='color: red;'>Database Connection: FAILED</p>\n";
    echo "<p>Error: " . $e->getMessage() . "</p>\n";
}
echo "        </div>\n";
echo "\n";
echo "        <div class='footer'>\n";
echo "            <p>DHealth Project - Complete Docker Infrastructure Demo</p>\n";
echo "            <p>Real-time System Monitoring with Grafana & Prometheus</p>\n";
echo "        </div>\n";
echo "    </div>\n";
echo "</body>\n</html>\n";
?>
