# Mockup Database Schema

| Table Name    | Column Name      | Data Type    | Description                             |
|---------------|------------------|--------------|-----------------------------------------|
| **jobs**      | id (PK)          | INT          | Unique identifier                       |
|               | title            | VARCHAR(255) | Job title                               |
|               | company_id (FK)  | INT          | References companies.id                 |
|               | location         | VARCHAR(255) | Job location                            |
|               | industry         | VARCHAR(100) | Industry category                       |
|               | description      | TEXT         | Full job description                    |
|               | job_type         | VARCHAR(50)  | Full-time, Part-time, etc.              |
|               | posted_date      | DATE         | Date posted                             |
|               | application_url  | VARCHAR(255) | URL or email for application            |
|               | salary_range     | VARCHAR(100) | Salary offer or range                   |
|               | experience       | VARCHAR(50)  | Required experience level              |
| **companies** | id (PK)          | INT          | Unique identifier                       |
|               | name             | VARCHAR(255) | Company name                            |
|               | logo_url         | VARCHAR(255) | Company logo image URL                  |
|               | website          | VARCHAR(255) | Company website                         |
|               | description      | TEXT         | Company profile                         |
|               | address          | VARCHAR(255) | Company address                    |
|               | established_year | YEAR         | Year founded                       |
|               | num_employees    | INT          | Approximate workforce size         |
|               | products_services| TEXT         | Products and services              |
| **interviews**| id (PK)          | INT          | Unique interview confirmation ID        |
|               | job_id (FK)      | INT          | References jobs.id                      |
|               | candidate_name   | VARCHAR(255) | Candidate's name                        |
|               | candidate_email  | VARCHAR(255) | Candidate's email                       |
|               | scheduled_date   | DATETIME     | Scheduled interview date and time       |
| **blog_posts**| id (PK)          | INT          | Unique blog post ID                     |
|               | title            | VARCHAR(255) | Blog post title                         |
|               | author           | VARCHAR(100) | Author name                             |
|               | content          | TEXT         | Full blog content                       |
|               | category         | VARCHAR(100) | Blog category                           |
|               | published_date   | DATE         | Date published                          |
| **walkin_interviews** | id (PK)          | INT          | Unique walk-in interview ID        |
|                   | date            | DATE         | Interview date                     |
|                   | company_id (FK) | INT          | References companies.id            |
|                   | positions       | VARCHAR(255) | Roles available                    |
|                   | time            | VARCHAR(100) | Interview time range               |
|                   | location        | VARCHAR(255) | Interview venue                    |
|                   | notes_contact   | VARCHAR(255) | Additional notes or contact info   |
