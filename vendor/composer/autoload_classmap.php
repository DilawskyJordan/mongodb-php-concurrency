<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'MongoConcurrency\\Mongo' => $baseDir . '/src/Mongo.php',
    'MongoDB\\BulkWriteResult' => $vendorDir . '/mongodb/mongodb/src/BulkWriteResult.php',
    'MongoDB\\ChangeStream' => $vendorDir . '/mongodb/mongodb/src/ChangeStream.php',
    'MongoDB\\Client' => $vendorDir . '/mongodb/mongodb/src/Client.php',
    'MongoDB\\Collection' => $vendorDir . '/mongodb/mongodb/src/Collection.php',
    'MongoDB\\Database' => $vendorDir . '/mongodb/mongodb/src/Database.php',
    'MongoDB\\DeleteResult' => $vendorDir . '/mongodb/mongodb/src/DeleteResult.php',
    'MongoDB\\Exception\\BadMethodCallException' => $vendorDir . '/mongodb/mongodb/src/Exception/BadMethodCallException.php',
    'MongoDB\\Exception\\Exception' => $vendorDir . '/mongodb/mongodb/src/Exception/Exception.php',
    'MongoDB\\Exception\\InvalidArgumentException' => $vendorDir . '/mongodb/mongodb/src/Exception/InvalidArgumentException.php',
    'MongoDB\\Exception\\ResumeTokenException' => $vendorDir . '/mongodb/mongodb/src/Exception/ResumeTokenException.php',
    'MongoDB\\Exception\\RuntimeException' => $vendorDir . '/mongodb/mongodb/src/Exception/RuntimeException.php',
    'MongoDB\\Exception\\UnexpectedValueException' => $vendorDir . '/mongodb/mongodb/src/Exception/UnexpectedValueException.php',
    'MongoDB\\Exception\\UnsupportedException' => $vendorDir . '/mongodb/mongodb/src/Exception/UnsupportedException.php',
    'MongoDB\\GridFS\\Bucket' => $vendorDir . '/mongodb/mongodb/src/GridFS/Bucket.php',
    'MongoDB\\GridFS\\CollectionWrapper' => $vendorDir . '/mongodb/mongodb/src/GridFS/CollectionWrapper.php',
    'MongoDB\\GridFS\\Exception\\CorruptFileException' => $vendorDir . '/mongodb/mongodb/src/GridFS/Exception/CorruptFileException.php',
    'MongoDB\\GridFS\\Exception\\FileNotFoundException' => $vendorDir . '/mongodb/mongodb/src/GridFS/Exception/FileNotFoundException.php',
    'MongoDB\\GridFS\\ReadableStream' => $vendorDir . '/mongodb/mongodb/src/GridFS/ReadableStream.php',
    'MongoDB\\GridFS\\StreamWrapper' => $vendorDir . '/mongodb/mongodb/src/GridFS/StreamWrapper.php',
    'MongoDB\\GridFS\\WritableStream' => $vendorDir . '/mongodb/mongodb/src/GridFS/WritableStream.php',
    'MongoDB\\InsertManyResult' => $vendorDir . '/mongodb/mongodb/src/InsertManyResult.php',
    'MongoDB\\InsertOneResult' => $vendorDir . '/mongodb/mongodb/src/InsertOneResult.php',
    'MongoDB\\MapReduceResult' => $vendorDir . '/mongodb/mongodb/src/MapReduceResult.php',
    'MongoDB\\Model\\BSONArray' => $vendorDir . '/mongodb/mongodb/src/Model/BSONArray.php',
    'MongoDB\\Model\\BSONDocument' => $vendorDir . '/mongodb/mongodb/src/Model/BSONDocument.php',
    'MongoDB\\Model\\BSONIterator' => $vendorDir . '/mongodb/mongodb/src/Model/BSONIterator.php',
    'MongoDB\\Model\\CachingIterator' => $vendorDir . '/mongodb/mongodb/src/Model/CachingIterator.php',
    'MongoDB\\Model\\ChangeStreamIterator' => $vendorDir . '/mongodb/mongodb/src/Model/ChangeStreamIterator.php',
    'MongoDB\\Model\\CollectionInfo' => $vendorDir . '/mongodb/mongodb/src/Model/CollectionInfo.php',
    'MongoDB\\Model\\CollectionInfoCommandIterator' => $vendorDir . '/mongodb/mongodb/src/Model/CollectionInfoCommandIterator.php',
    'MongoDB\\Model\\CollectionInfoIterator' => $vendorDir . '/mongodb/mongodb/src/Model/CollectionInfoIterator.php',
    'MongoDB\\Model\\DatabaseInfo' => $vendorDir . '/mongodb/mongodb/src/Model/DatabaseInfo.php',
    'MongoDB\\Model\\DatabaseInfoIterator' => $vendorDir . '/mongodb/mongodb/src/Model/DatabaseInfoIterator.php',
    'MongoDB\\Model\\DatabaseInfoLegacyIterator' => $vendorDir . '/mongodb/mongodb/src/Model/DatabaseInfoLegacyIterator.php',
    'MongoDB\\Model\\IndexInfo' => $vendorDir . '/mongodb/mongodb/src/Model/IndexInfo.php',
    'MongoDB\\Model\\IndexInfoIterator' => $vendorDir . '/mongodb/mongodb/src/Model/IndexInfoIterator.php',
    'MongoDB\\Model\\IndexInfoIteratorIterator' => $vendorDir . '/mongodb/mongodb/src/Model/IndexInfoIteratorIterator.php',
    'MongoDB\\Model\\IndexInput' => $vendorDir . '/mongodb/mongodb/src/Model/IndexInput.php',
    'MongoDB\\Operation\\Aggregate' => $vendorDir . '/mongodb/mongodb/src/Operation/Aggregate.php',
    'MongoDB\\Operation\\BulkWrite' => $vendorDir . '/mongodb/mongodb/src/Operation/BulkWrite.php',
    'MongoDB\\Operation\\Count' => $vendorDir . '/mongodb/mongodb/src/Operation/Count.php',
    'MongoDB\\Operation\\CountDocuments' => $vendorDir . '/mongodb/mongodb/src/Operation/CountDocuments.php',
    'MongoDB\\Operation\\CreateCollection' => $vendorDir . '/mongodb/mongodb/src/Operation/CreateCollection.php',
    'MongoDB\\Operation\\CreateIndexes' => $vendorDir . '/mongodb/mongodb/src/Operation/CreateIndexes.php',
    'MongoDB\\Operation\\DatabaseCommand' => $vendorDir . '/mongodb/mongodb/src/Operation/DatabaseCommand.php',
    'MongoDB\\Operation\\Delete' => $vendorDir . '/mongodb/mongodb/src/Operation/Delete.php',
    'MongoDB\\Operation\\DeleteMany' => $vendorDir . '/mongodb/mongodb/src/Operation/DeleteMany.php',
    'MongoDB\\Operation\\DeleteOne' => $vendorDir . '/mongodb/mongodb/src/Operation/DeleteOne.php',
    'MongoDB\\Operation\\Distinct' => $vendorDir . '/mongodb/mongodb/src/Operation/Distinct.php',
    'MongoDB\\Operation\\DropCollection' => $vendorDir . '/mongodb/mongodb/src/Operation/DropCollection.php',
    'MongoDB\\Operation\\DropDatabase' => $vendorDir . '/mongodb/mongodb/src/Operation/DropDatabase.php',
    'MongoDB\\Operation\\DropIndexes' => $vendorDir . '/mongodb/mongodb/src/Operation/DropIndexes.php',
    'MongoDB\\Operation\\EstimatedDocumentCount' => $vendorDir . '/mongodb/mongodb/src/Operation/EstimatedDocumentCount.php',
    'MongoDB\\Operation\\Executable' => $vendorDir . '/mongodb/mongodb/src/Operation/Executable.php',
    'MongoDB\\Operation\\Explain' => $vendorDir . '/mongodb/mongodb/src/Operation/Explain.php',
    'MongoDB\\Operation\\Explainable' => $vendorDir . '/mongodb/mongodb/src/Operation/Explainable.php',
    'MongoDB\\Operation\\Find' => $vendorDir . '/mongodb/mongodb/src/Operation/Find.php',
    'MongoDB\\Operation\\FindAndModify' => $vendorDir . '/mongodb/mongodb/src/Operation/FindAndModify.php',
    'MongoDB\\Operation\\FindOne' => $vendorDir . '/mongodb/mongodb/src/Operation/FindOne.php',
    'MongoDB\\Operation\\FindOneAndDelete' => $vendorDir . '/mongodb/mongodb/src/Operation/FindOneAndDelete.php',
    'MongoDB\\Operation\\FindOneAndReplace' => $vendorDir . '/mongodb/mongodb/src/Operation/FindOneAndReplace.php',
    'MongoDB\\Operation\\FindOneAndUpdate' => $vendorDir . '/mongodb/mongodb/src/Operation/FindOneAndUpdate.php',
    'MongoDB\\Operation\\InsertMany' => $vendorDir . '/mongodb/mongodb/src/Operation/InsertMany.php',
    'MongoDB\\Operation\\InsertOne' => $vendorDir . '/mongodb/mongodb/src/Operation/InsertOne.php',
    'MongoDB\\Operation\\ListCollections' => $vendorDir . '/mongodb/mongodb/src/Operation/ListCollections.php',
    'MongoDB\\Operation\\ListDatabases' => $vendorDir . '/mongodb/mongodb/src/Operation/ListDatabases.php',
    'MongoDB\\Operation\\ListIndexes' => $vendorDir . '/mongodb/mongodb/src/Operation/ListIndexes.php',
    'MongoDB\\Operation\\MapReduce' => $vendorDir . '/mongodb/mongodb/src/Operation/MapReduce.php',
    'MongoDB\\Operation\\ModifyCollection' => $vendorDir . '/mongodb/mongodb/src/Operation/ModifyCollection.php',
    'MongoDB\\Operation\\ReplaceOne' => $vendorDir . '/mongodb/mongodb/src/Operation/ReplaceOne.php',
    'MongoDB\\Operation\\Update' => $vendorDir . '/mongodb/mongodb/src/Operation/Update.php',
    'MongoDB\\Operation\\UpdateMany' => $vendorDir . '/mongodb/mongodb/src/Operation/UpdateMany.php',
    'MongoDB\\Operation\\UpdateOne' => $vendorDir . '/mongodb/mongodb/src/Operation/UpdateOne.php',
    'MongoDB\\Operation\\Watch' => $vendorDir . '/mongodb/mongodb/src/Operation/Watch.php',
    'MongoDB\\Operation\\WithTransaction' => $vendorDir . '/mongodb/mongodb/src/Operation/WithTransaction.php',
    'MongoDB\\UpdateResult' => $vendorDir . '/mongodb/mongodb/src/UpdateResult.php',
);
