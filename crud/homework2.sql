UPDATE agents
SET agents.COMISSION = agents.COMISSION - 0.02
WHERE agents.AGENT_CODE =
(
    SELECT customer.AGENT_CODE
    FROM customer
    HAVING MIN(customer.PAYMENT_AMT)
  );