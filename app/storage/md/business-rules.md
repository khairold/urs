<!--<div class="bs-docs-section">-->
# Business Model {#business-model}

Via WWS, TM is positioned as a neutral host providing shared wireless access to Service Providers.

**Target customers**:

1. Mature Mobile Operators    
  a. Requires secure and dedicated connectivity to their own network  
  b. Requires control on their own internet policy  
  c. High priority on WiFi footprint and quality of service

2. New Mobile Operators/MVNO  
  a. Lower capital  
  b. Requires Faster Go-To-Market option  
  c. Requires total outsourcing  
<!--</div>-->

<!--<div class="bs-docs-section">-->
# Package Offering
## Product Types  

|Type			|SSID		|Internet	|
|---------------|-----------|-----------|
|Type 1			|Shared		|TM's		|
|Type 2			|Dedicated	|TM's		|
|Type 3			|Dedicated	|Customers'	|

## Pre-requisite

1. Customer must ensure their own radius readiness for all WWS types.
2. Customer must establish connectivity from SG to customer’s network prior to subscribe to WWS Type 3.

## SSID

* Shared
* Dedicated

> based on Product Type

##Internet Connectivity

* TM's
* Customers'

> based on Product Type

##Access Point

Shared amongst accross TM's LOB

## Bandwidth

* Shared
* Dedicated

> Depends on network capability: FTTH / Ethernet / xDSL

## User Throughput

Varies and is offered at a max of 2Mbps per end user 

> Customer shall have control of users’ package

## Customer's Responsibility

* Landing Page
* User Management
* Authentication

> Integration between Customers' network and TM's Backed Server

## Value-added Service

* EAP SIM seamless authentication
* Seamless roaming between APs
* Location based analytics
* Reporting 
* Other features subject to testing

## Product Category

Wireless Data

## Product Segment

Global & Wholesale

## Service Subscription Eligibility

* Domestic Provider
* Global Provider (Roaming)
<!--</div>-->

## Pricing

> Other than the *Generic Charging Table*, all other charges are set by WWS Service  
> All charges should be configurable
> 

### Generic Charging Table by Product Type

|Type	|Service Status	|Rental	|Usage			|
|-------|---------------|-------|---------------|
|Type 1 |Trial			|Fixed	|N/A			|
|Type 1 |Live			|Fixed	|Traffic Minutes|
|Type 2	|Trial			|Per AP	|N/A			|
|Type 2	|Live			|Per AP	|Volume Usage	|
|Type 3	|Trial			|Per AP	|N/A			|
|Type 3	|Live			|Per AP	|Volume Usage	|


### One-Time Charge

| OTC					| Amount (RM)	| Trigger	| Formula	|
|-----------------------|---------------|-----------|-----------|
|Solution Design		|				|Manual		|			|
|Backend Configuration	|				|Manual		|			|
|Backend Integration	|				|Manual		|			|
|AP Configuration		|				|Manual		|			|
|AP Relocation			|				|Manual		|			|
|AP Termination			|				|Automatic when AP terminated and subsciption is less than the Agreement Period 		| (Agreement Period - AP Subscription Period) * AP Rental|
|Cancellation			|				|Manual		|			|
|Reconnection			|				|Manual		|			|
|WWS Termination		|				|Manual		|			|

## Monthly Recurring Charge

#### AP Rental

*Type 1 example:*

|AP Rental	|Rental	(RM)	|
|---------------|---------------|
|All APs		|5000			|

*Type 2 & Type 3 example:*

|AP Category	|Rental	(RM)	|
|---------------|---------------|
|Premium		|100			|
|Basic			|70				|

#### Volume Usage

*Type 1 example:*

|Usage (TB)			|Charge per GB (RM)	|
|-------------------|-------------------|
|<= 5TB				|25					|
|> 5TB and <= 10TB	|20					|
|> 10TB and <= 25TB	|15					|
|> 25TB				|12.50				|

#### Traffic Minutes

*Type 2 & Type 3 example:*

|Connected Minutes			|Charge per Minute (USD)	|
|---------------------------|---------------------------|
| <= 22,500					|0.05						|
| > 22,501 and <= 60,000	|0.04						|
| > 60,000					|0.03						|

#### Charging Elements

* One-Time Charge
* Monthly Recurring Charge

## Taxation

Based on latest Service Tax / GST from Finance team.

##Early Termination Penalty

* AP Termination
* WWS Termination

> Details in the Pricing section

## Contract Terms

Contract Agreement Elements:

* Agreement Name
* Agreement Period (months)
* Agreement Start Date
* AP Number

> One WWS Service may have multiple Agreement  
> Agreement is pre-requisite for AP order  
> Every AP ordered must be tied to an Agreement  
> Agreement Start Date to be defaulted to the installation of the first AP  

*Agreement Table example:*

|Service ID	| Agreement Name	| Period (Months) 	| Start Date				| AP No	|
|-----------|-------------------|-------------------|---------------------------|-------|
|WWSCELCOM1	| Celcom Agreement 1| 60				| 20/10/2014				|100	|
|WWSCELCOM1	| Celcom Agreement 2| 12				| [installation of 1st AP]	|20		|


## Service Level Agreement

Best Effort

Restoration Table:

|Priority Level	|Fault Types			|MTTR per site per Trouble Report	|
|---------------|-----------------------|-----------------------------------|
|Level 1		|Accessibility Issues	|3 Business Days					|
|Level 2		|Quality Issues			|7 Business Days					|

