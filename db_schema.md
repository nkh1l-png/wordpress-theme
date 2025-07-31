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
| **companies** | id (PK)          | INT          | Unique identifier                       |
|               | name             | VARCHAR(255) | Company name                            |
|               | logo_url         | VARCHAR(255) | Company logo image URL                  |
|               | website          | VARCHAR(255) | Company website                         |
|               | description      | TEXT         | Company profile                         |
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
