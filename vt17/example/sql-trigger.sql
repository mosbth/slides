--
-- Log table
--
DROP TABLE IF EXISTS AccountLog;
CREATE TABLE AccountLog
(
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT,
    `when` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `what` VARCHAR(20),
    `account` CHAR(4),
    `balance` DECIMAL(4, 2),
    `amount` DECIMAL(4, 2)
);

DELETE FROM AccountLog;
SELECT * FROM AccountLog;

--
-- Trigger for logging updating balance
--
DROP TRIGGER IF EXISTS LogBalanceUpdate;

CREATE TRIGGER LogBalanceUpdate
AFTER UPDATE
ON Account FOR EACH ROW
    INSERT INTO AccountLog (`what`, `account`, `balance`, `amount`)
        VALUES ("trigger", NEW.id, NEW.balance, NEW.balance - OLD.balance);

SHOW TRIGGERS;

CALL moveMoney("2222", "1111", 1.5);
SELECT * FROM AccountLog;
