--
-- Procedure moveMoney()
--
DROP PROCEDURE moveMoney;

DELIMITER //

CREATE PROCEDURE moveMoney(
    fromAccount CHAR(4),
    toAccount CHAR(4),
    amount NUMERIC(4, 2)
)
BEGIN
    DECLARE currentBalance NUMERIC(4, 2);
    
    START TRANSACTION;

    SET currentBalance = (SELECT balance FROM Account WHERE id = fromAccount);
    SELECT currentBalance;

	IF currentBalance - amount < 0 THEN
		ROLLBACK;
		SELECT "Amount on the account is not enough to make the transaction.";

	ELSE

		UPDATE Account 
		SET
			balance = balance + amount
		WHERE
			id = toAccount;

		UPDATE Account 
		SET
			balance = balance - amount
		WHERE
			id = fromAccount;
			
		COMMIT;

	END IF;
    
	SELECT * FROM Account;
END
//

DELIMITER ;

SHOW PROCEDURE STATUS;
SHOW CREATE PROCEDURE moveMoney;

CALL moveMoney("1111", "2222", 1.5);
