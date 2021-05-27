UPDATE agents
SET agents.COMISSION = agents.COMISSION - 0.02
WHERE agent_code IN
(
SELECT agent_code FROM customer
WHERE PAYMENT_AMT=(SELECT MIN(PAYMENT_AMT) FROM customer)
);