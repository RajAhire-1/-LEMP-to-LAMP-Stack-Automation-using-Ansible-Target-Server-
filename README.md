# LEMP to LAMP Stack Automation using Ansible (Target Server)

This project demonstrates how to automate the migration from a **LEMP stack (Linux, Nginx, MariaDB, PHP)** to a **LAMP stack (Linux, Apache, MariaDB, PHP)** on a **target Amazon Linux server** using **Ansible**.

Instead of manually uninstalling and installing services, the entire process is handled through a single Ansible playbook executed on a remote target server.

---

## Project Overview

The Ansible playbook performs the following actions on the target server:

- Removes Nginx
- Installs Apache (httpd)
- Installs MariaDB
- Installs PHP and PHP-FPM
- Stops and disables the Nginx service
- Starts and enables Apache, MariaDB, and PHP-FPM services
- Deploys a sample `index.html` file to verify the Apache setup

This simulates a real-world DevOps migration scenario where an existing web stack must be replaced safely and automatically.

---

## Technology Stack

- Operating System: Amazon Linux  
- Automation Tool: Ansible  
- Web Server: Apache (httpd)  
- Database: MariaDB  
- Backend Language: PHP, PHP-FPM  
- Inventory Type: Static inventory (`inventory.ini`)  

---

## Project Structure

```

ansible-lemp-to-lamp/
├── lemp_on_target.yml
├── inventory.ini
├── index.html
└── README.md

````

---

## Ansible Playbook (`lemp_on_target.yml`)

This playbook is executed on a remote target server defined in the inventory file.

### Key Tasks Performed

- Package management using the `dnf` module
- Service control using the `systemd_service` module
- Conditional service handling using loops
- File deployment using the `copy` module

The playbook uses `become: yes` to perform system-level changes securely.

---

## Inventory File (`inventory.ini`)

The inventory file defines the target server and SSH access details:

```ini
[targetserver]
172.31.11.163 ansible_user=ec2-user ansible_ssh_private_key_file=/home/ec2-user/com.pem
````

This allows Ansible to connect securely to the remote EC2 instance.

---

## How to Run the Playbook

### Verify Ansible Installation

```bash
ansible --version
```

### Test Connectivity to Target Server

```bash
ansible -i inventory.ini targetserver -m ping
```

### Run the Playbook

```bash
ansible-playbook -i inventory.ini lemp_on_target.yml
```

---

## Verification

After successful execution, verify the following:

* Apache service is running
* Nginx is removed and disabled
* MariaDB service is active
* PHP-FPM service is running
* Web page is served by Apache

Access the application in a browser:

```
http://<TARGET_SERVER_PUBLIC_IP>/
```

---

## Use Case

This project is useful for:

* Practicing Ansible with remote target servers
* Automating web stack migrations
* Learning service management with Ansible
* Understanding real-world DevOps automation workflows
* Showcasing configuration management skills on GitHub

---

## Summary

This project shows how Ansible can be used to safely migrate an existing web stack on a running server using automation instead of manual intervention.

It highlights:

* Idempotent configuration
* Remote server automation
* Clean and repeatable deployments

---

## Author

Raj Ahire
AWS | DevOps | Terraform | Ansible | Automation

```
