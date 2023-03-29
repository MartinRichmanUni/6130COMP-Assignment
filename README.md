# 6130COMP-Assignment - Proposed Cloud Solution

## Description

The proposed cloud solution is a multi-tiered solution for handling user input requests though a html form for further processing. The tiers consist of the Presentation tier which is displayed to the user, a Business tier which processes the data from the form and connects to the database, and a data tier which consists of a database for storing data. The proposed solution uses a single Docker Compose file to deploy both platform and application code through a single command method.

## Deploying the Service

To deploy the service, the repository should be extracted into a suitable Docker environment. 

Once the files and folders have been extracted, the service can be run using the following commands:
- Ensure you are within the extracted folder 6130COMP-Assignment, using the 'cd' command.
- _docker-compose build._ This command will build/create the service using the specifications from the docker-compose.yaml file.
- _docker-compose up._ This will deploy the service created to provide access to it.
    - To access the service, navigate to the ip address of your Virtual Machine (e.g. 192.56.0.1:80) or localhost address on WSL (e.g. 127.0.0.1:80) including port number 80.

## Testing the Service

Once the service has been deployed and is running, the functionality of the service can be tested with the following methods:
- Enter the required inputs for the form, including one of the following barcodes
    - b738d34d66
    - d9f8ff535c
    - e515068b40 **NOTE. Should return a coupon code for a free ball**
    - 23956bd17d
    - 8c805aed6b
- Once a barcode has been used, it should not be available anymore. So, re-entering the same barcode can be used to check this functionality.
Form page (index.php) can be refreshed multiple times to check if traffic is load balanced and service continues to run without issue.

## Repository

The public repository can be found at the following address: https://github.com/MartinRichmanUni/6130COMP-Assignment
Additionally the commit history is provided in text format as log.txt
