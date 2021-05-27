/*
* Author: ARIGA, young & energetic fresher
* Purpose:SQL best practice training
*/

SELECT 
    agents.WORKING_AREA,   
    avg(agents.COMISSION) AS `commission_average`,
    count(agents.AGENT_NAME) AS `number_of_agents`
FROM 
    agents
GROUP BY 
	-- get the average 'commission' and the number of agents for each group of 'working_area' 
    agents.WORKING_AREA 
HAVING 
	--condition: number of agents for each group of 'working_area' must be less than 3
    count(agents.AGENT_NAME)< 3
ORDER BY 
    `commission_average`, `number_of_agents` desc;
