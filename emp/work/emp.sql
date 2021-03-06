-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3308
-- 生成日期： 2020-09-22 13:30:53
-- 服务器版本： 8.0.18
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `xiaoma`
--

-- --------------------------------------------------------

--
-- 表的结构 `emp`
--

DROP TABLE IF EXISTS `emp`;
CREATE TABLE IF NOT EXISTS `emp` (
  `EMPNO` int(4) NOT NULL,
  `ENAME` varchar(32) NOT NULL,
  `JOB` varchar(32) NOT NULL,
  `MGR` int(4) DEFAULT NULL,
  `HIREDATE` date NOT NULL,
  `SAL` int(4) NOT NULL,
  `COMM` int(4) DEFAULT NULL,
  `DEPTNO` int(4) NOT NULL,
  PRIMARY KEY (`ENAME`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `emp`
--

INSERT INTO `emp` (`EMPNO`, `ENAME`, `JOB`, `MGR`, `HIREDATE`, `SAL`, `COMM`, `DEPTNO`) VALUES
(7369, 'SMITH', 'CLERK', 7902, '1990-12-17', 13750, NULL, 20),
(7499, 'ALLEN', 'SALESMAN', 7698, '1989-02-20', 19000, 6400, 30),
(7521, 'WARD', 'SALESMAN', 7698, '1993-02-22', 18500, 4250, 30),
(7566, 'JONES', 'MANAGER', 7839, '1989-04-02', 26850, NULL, 20),
(7654, 'MARTIN', 'SALESMAN', 7698, '1997-09-28', 15675, 3500, 30),
(7698, 'BLAKE', 'MANAGER', 7839, '1990-05-01', 24000, NULL, 30),
(7782, 'CLARK', 'MANAGER', 7839, '1988-07-09', 27500, NULL, 10),
(7788, 'SCOTT', 'ANALYST', 7566, '1987-04-19', 19500, NULL, 20),
(7839, 'KING', 'PRESIDENT', NULL, '1983-11-17', 82500, NULL, 10),
(7844, 'TURNER', 'SALESMAN', 7698, '1992-09-08', 18500, 6250, 30),
(7876, 'ADAMS', 'CLERK', 7788, '1996-05-23', 11900, NULL, 20),
(7900, 'JAMES', 'CLERK', 7698, '1995-12-03', 12500, NULL, 30),
(7902, 'FORD', 'ANALYST', 7566, '1991-12-03', 21500, NULL, 20),
(7934, 'MILLER', 'CLERK', 7782, '1995-01-23', 13250, NULL, 10),
(3258, 'GREEN', 'SALESMAN', 4422, '1995-07-24', 18500, 2750, 50),
(4422, 'STEVENS', 'MANAGER', 7839, '1994-01-14', 24750, NULL, 50),
(6548, 'BARNES', 'CLERK', 4422, '1995-01-16', 11950, NULL, 50);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
