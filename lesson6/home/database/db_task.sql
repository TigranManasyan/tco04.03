

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `task` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `task` (`task_id`, `task`, `status`) VALUES
(1, 'Check Errors', 'Done'),
(4, 'Remove Bugs', ''),
(5, 'Need Improvements', '');


ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;
