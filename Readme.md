# Horizon As a central queue manager

Imagine that we have several microservices and one Redis server to handle queues, in this case, we can use Laravel Horizon as the central queue manager for all of the queues of all microservices.
BUT IT'S NOT POSSIBLE! Because Laravel created a premium application called Nova for this use! 

# Other ways
Laravel Horizon is designed to provide individual dashboards for each application to ensure better isolation and monitoring of queues per application. This design choice helps in understanding the performance and status of each application's queues separately.

If you want to have a centralized dashboard that shows jobs from multiple applications, you have a few options:

1. Custom Dashboard: Create a custom dashboard or reporting tool that fetches and aggregates the queue metrics and data from different Horizon instances running on each application. You can use Laravel's API endpoints provided by Horizon to gather the necessary information and display it in a unified dashboard.

2. Third-Party Monitoring Tools: There are third-party monitoring and dashboard tools available that can integrate with Laravel Horizon and provide centralized monitoring for multiple applications. Tools like Prometheus and Grafana are commonly used for this purpose.

3. Laravel Nova: If you have Laravel Nova installed, it provides a way to monitor Horizon queues across multiple applications by connecting to each application's database. Laravel Nova is a premium package, and you need a license to use it.

It's important to consider the security implications of having a centralized dashboard. Accessing queue data from different applications in a single dashboard may introduce potential security risks. Be cautious when exposing data across applications, especially if they are handling sensitive information.

# Prometheus and Grafana!



