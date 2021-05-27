/*
* Author: ARIGA, young & energetic fresher
* Purpose:SQL best practice training
*/

select 
    agents.WORKING_AREA,   
    avg(agents.COMISSION) AS `commission_average`,
    count(agents.AGENT_NAME) AS `number_of_agents`
from
    agents
group by 
	-- get the average 'commission' and the number of agents for each group of 'working_area' 
    agents.WORKING_AREA 
having 
	--condition: number of agents for each group of 'working_area' must be less than 3
    count(agents.AGENT_NAME)< 3
order by 
    avg(agents.COMISSION), count(agents.AGENT_NAME) desc;
