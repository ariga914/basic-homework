CREATE TABLE new_agents AS
	SELECT *
    PRIMARY KEY(AGENT_CODE)
    FROM agents
    WHERE agents.WORKING_AREA = 'London'
    AND AGENT_CODE IN  
    (
        SELECT customer.AGENT_CODE 
        FROM customer
        WHERE customer.CUST_COUNTRY = 'UK'
     );