use week4sweetshoptest;

db.sweets.drop();

db.sweets.insertMany([
  { '_id': 1, 'item': 'twix', 'price': 0.75, 'quantity': 2 },
  { '_id': 2, 'item': 'kitkat', 'price': 0.80, 'quantity': 1 },
  { '_id': 3, 'item': 'mars', 'price': 0.90, 'quantity': 10 },
  { '_id': 4, 'item': 'chomp', 'price': 0.25, 'quantity':  20}
]);

db.sweets.find({});
