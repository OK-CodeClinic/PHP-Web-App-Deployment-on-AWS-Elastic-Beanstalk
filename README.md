#  PHP WEB APP DEPLOYMENT ON AWS ELASTIC BEANSTALK (Ecom project 0x01)
## DESCRIPTION: 
Ecom project 0x01 covers how i deployed PHP webapp that comprises PHP and Nginx frontend services; on AWS elastic beanstalk, Mysql backend; on Amazon RDS and Elasticache.

## OBJECTIVE:
- No upfront Cost
- Low operational Overhead
- Flexibililty
- Automation (IAAC)
- PAAS and SAAS
- Convinience Scaling
- Easy to set Up
- Good Performance
- Easy to maintain
- Modernize effectiveness


### AWS Services Used;
- Beanstalk: Handles the PHP server, Application Load Balancer, Nginx Websever, Autoscaling group, SGs, Cloudwatch Alarm
- RDS
- Amazon Elasticache - Redis
- Ec2 Instance (Mysql client server)
- CloudFront
- S3 (Stores app artifacts)
- Route 53 (DNS)
- Others include; IAM, Amazon Certicate Manager, KeyPair, Security Groups.


## ARCHITECTURE
  ![beanstalk-archi](https://github.com/OK-CodeClinic/PHP-Web-App-Deployment-on-AWS-Elastic-Beanstalk/assets/100064229/cba5e8d6-8b66-4623-a957-3c66728f3953)


### How it works;
- User access endpoint of Route 53 ```ecom.kardozo.site```
- The endpoint will be cache by the Amazon CloudFront
- Cloudfront sends the 443 traffic to the Elastic Beanstalk
- ALB of Beanstalk forward the request to the Instance (PHP server & Nginx) in the Auto Scaling Group.
- All Services in the BEanstalk is monitored by Amazon Clouwatch that triggers alarm.
- PHP Instance will access backend services in a separated Security Group; Mysql from port 3306 and Redis on port 6379.
- The whole process goes and the user will be able to access the web app




## FLOW OF EXECUTION
#### Step 1:
Login to AWS Console
#### Step 2:
Create KeyPair for Beanstalk instance login
#### Step 3:
Create Security groups for backend services 'RDS and Redis


#### Step 4: 
Create RDS and a table; ecom


#### Step 5:
Create Amazon Redis
 - RDS
 ![RDS](https://github.com/OK-CodeClinic/PHP-Web-App-Deployment-on-AWS-Elastic-Beanstalk/assets/100064229/09dc8055-382b-41c9-b229-edc0b078d2fa)

- Redis Cache
  ![Redis](https://github.com/OK-CodeClinic/PHP-Web-App-Deployment-on-AWS-Elastic-Beanstalk/assets/100064229/dd704830-0e15-4871-93c8-06a7a7f883d4)



#### Step 6:
Create Elastic Beanstalk Environment.
 ![beanstalk-env](https://github.com/OK-CodeClinic/PHP-Web-App-Deployment-on-AWS-Elastic-Beanstalk/assets/100064229/6d2e789d-059e-4e65-838a-c391d0c6be32)


#### Step 5:
- Update Backend Security group to allow traffic from Beanstalk Security Group
- Update backend Security Group to allow internal traffic

#### Step 6: 
Launch mysql-client for Database initialization

#### Step 7:
Add 443 https listener to Beanstalk LoadBalancer and attach certificate

#### Step 8:
Deploy artifact to s3

#### Step 9:
Deploy artifact from s3 to beanstalk
  ![beatsalk-deployed](https://github.com/OK-CodeClinic/PHP-Web-App-Deployment-on-AWS-Elastic-Beanstalk/assets/100064229/a384fae5-254a-4e6a-8c1c-06e425b488f6)


#### Step 10:
Create Content Delivery distribution with the SSL certifcate
  ![Cloudfront-deployed](https://github.com/OK-CodeClinic/PHP-Web-App-Deployment-on-AWS-Elastic-Beanstalk/assets/100064229/9568eb3e-2cda-43a3-b014-3311d0fd609b)

#### Step 11:
- Upload entry on Route 53

#### Step 12:

- Validate Alarm created by Cloudwatch triggered by Beanstalk
  ![alarm1](https://github.com/OK-CodeClinic/PHP-Web-App-Deployment-on-AWS-Elastic-Beanstalk/assets/100064229/29d142d5-8ed1-417b-aa0d-527b878048a1)
  
  
![alarm2](https://github.com/OK-CodeClinic/PHP-Web-App-Deployment-on-AWS-Elastic-Beanstalk/assets/100064229/f301ffb1-9ef2-494a-9bd6-2e2ef961efde)


## OUTCOME
All running perfectly.
  ![Screenshot (162)](https://github.com/OK-CodeClinic/PHP-Web-App-Deployment-on-AWS-Elastic-Beanstalk/assets/100064229/2d3535b6-4d25-4623-92b0-1bbdade70788)



## Author

- [Kehinde Omokungbe](https://www.github.com/OK-CodeClinic)



## Purpose
This is for leaning purpose only.

### Developer
This PHP application was developed by [Shazia Sajid](https://github.com/ShaziaSajid)
