SELECT * FROM customer
WHERE customer.GRADE = 3 
AND customer.CUST_COUNTRY <> 'India' 
AND customer.OPENING_AMT < 7000.00
AND customer.AGENT_CODE IN
(
	SELECT agents.AGENT_CODE FROM agents
	WHERE agents.COMISSION < 0.12
);