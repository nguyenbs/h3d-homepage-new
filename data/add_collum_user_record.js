db.createCollection("user_records");
db.getCollection("user_records").ensureIndex({
	"_id": NumberInt(1)
},[

]);
