<?php namespace r\pb;
class VersionDummy_Version
{
  const PB_V0_1  = 0x3f61ba36;
  const PB_V0_2  = 0x723081e1;
  const PB_V0_3  = 0x5f75e83e;
}
class VersionDummy_Protocol
{
  const PB_PROTOBUF  = 0x271ffc41;
  const PB_JSON  = 0x7e6970c7;
}
class Frame_FrameType
{
  const PB_POS  = 1;
  const PB_OPT  = 2;
}
class Datum_DatumType
{
  const PB_R_NULL  = 1;
  const PB_R_BOOL  = 2;
  const PB_R_NUM  = 3;
  const PB_R_STR  = 4;
  const PB_R_ARRAY  = 5;
  const PB_R_OBJECT  = 6;
  const PB_R_JSON  = 7;
}
class Response_ResponseType
{
  const PB_SUCCESS_ATOM  = 1;
  const PB_SUCCESS_SEQUENCE  = 2;
  const PB_SUCCESS_PARTIAL  = 3;
  const PB_SUCCESS_FEED  = 5;
  const PB_WAIT_COMPLETE  = 4;
  const PB_CLIENT_ERROR  = 16;
  const PB_COMPILE_ERROR  = 17;
  const PB_RUNTIME_ERROR  = 18;
}
class Term_TermType
{
  const PB_DATUM  = 1;
  const PB_MAKE_ARRAY  = 2;
  const PB_MAKE_OBJ  = 3;
  const PB_VAR  = 10;
  const PB_JAVASCRIPT  = 11;
  const PB_HTTP  = 153;
  const PB_ERROR  = 12;
  const PB_IMPLICIT_VAR  = 13;
  const PB_DB  = 14;
  const PB_TABLE  = 15;
  const PB_GET  = 16;
  const PB_GET_ALL  = 78;
  const PB_EQ  = 17;
  const PB_NE  = 18;
  const PB_LT  = 19;
  const PB_LE  = 20;
  const PB_GT  = 21;
  const PB_GE  = 22;
  const PB_NOT  = 23;
  const PB_ADD  = 24;
  const PB_SUB  = 25;
  const PB_MUL  = 26;
  const PB_DIV  = 27;
  const PB_MOD  = 28;
  const PB_APPEND  = 29;
  const PB_PREPEND  = 80;
  const PB_DIFFERENCE  = 95;
  const PB_SET_INSERT  = 88;
  const PB_SET_INTERSECTION  = 89;
  const PB_SET_UNION  = 90;
  const PB_SET_DIFFERENCE  = 91;
  const PB_SLICE  = 30;
  const PB_SKIP  = 70;
  const PB_LIMIT  = 71;
  const PB_INDEXES_OF  = 87;
  const PB_CONTAINS  = 93;
  const PB_GET_FIELD  = 31;
  const PB_KEYS  = 94;
  const PB_OBJECT  = 143;
  const PB_HAS_FIELDS  = 32;
  const PB_WITH_FIELDS  = 96;
  const PB_PLUCK  = 33;
  const PB_WITHOUT  = 34;
  const PB_MERGE  = 35;
  const PB_BETWEEN  = 36;
  const PB_REDUCE  = 37;
  const PB_MAP  = 38;
  const PB_FILTER  = 39;
  const PB_CONCATMAP  = 40;
  const PB_ORDERBY  = 41;
  const PB_DISTINCT  = 42;
  const PB_COUNT  = 43;
  const PB_IS_EMPTY  = 86;
  const PB_UNION  = 44;
  const PB_NTH  = 45;
  const PB_INNER_JOIN  = 48;
  const PB_OUTER_JOIN  = 49;
  const PB_EQ_JOIN  = 50;
  const PB_ZIP  = 72;
  const PB_INSERT_AT  = 82;
  const PB_DELETE_AT  = 83;
  const PB_CHANGE_AT  = 84;
  const PB_SPLICE_AT  = 85;
  const PB_COERCE_TO  = 51;
  const PB_TYPEOF  = 52;
  const PB_UPDATE  = 53;
  const PB_DELETE  = 54;
  const PB_REPLACE  = 55;
  const PB_INSERT  = 56;
  const PB_DB_CREATE  = 57;
  const PB_DB_DROP  = 58;
  const PB_DB_LIST  = 59;
  const PB_TABLE_CREATE  = 60;
  const PB_TABLE_DROP  = 61;
  const PB_TABLE_LIST  = 62;
  const PB_SYNC  = 138;
  const PB_INDEX_CREATE  = 75;
  const PB_INDEX_DROP  = 76;
  const PB_INDEX_LIST  = 77;
  const PB_INDEX_STATUS  = 139;
  const PB_INDEX_WAIT  = 140;
  const PB_FUNCALL  = 64;
  const PB_BRANCH  = 65;
  const PB_ANY  = 66;
  const PB_ALL  = 67;
  const PB_FOREACH  = 68;
  const PB_FUNC  = 69;
  const PB_ASC  = 73;
  const PB_DESC  = 74;
  const PB_INFO  = 79;
  const PB_MATCH  = 97;
  const PB_UPCASE  = 141;
  const PB_DOWNCASE  = 142;
  const PB_SAMPLE  = 81;
  const PB_DEFAULT  = 92;
  const PB_JSON  = 98;
  const PB_ISO8601  = 99;
  const PB_TO_ISO8601  = 100;
  const PB_EPOCH_TIME  = 101;
  const PB_TO_EPOCH_TIME  = 102;
  const PB_NOW  = 103;
  const PB_IN_TIMEZONE  = 104;
  const PB_DURING  = 105;
  const PB_DATE  = 106;
  const PB_TIME_OF_DAY  = 126;
  const PB_TIMEZONE  = 127;
  const PB_YEAR  = 128;
  const PB_MONTH  = 129;
  const PB_DAY  = 130;
  const PB_DAY_OF_WEEK  = 131;
  const PB_DAY_OF_YEAR  = 132;
  const PB_HOURS  = 133;
  const PB_MINUTES  = 134;
  const PB_SECONDS  = 135;
  const PB_TIME  = 136;
  const PB_MONDAY  = 107;
  const PB_TUESDAY  = 108;
  const PB_WEDNESDAY  = 109;
  const PB_THURSDAY  = 110;
  const PB_FRIDAY  = 111;
  const PB_SATURDAY  = 112;
  const PB_SUNDAY  = 113;
  const PB_JANUARY  = 114;
  const PB_FEBRUARY  = 115;
  const PB_MARCH  = 116;
  const PB_APRIL  = 117;
  const PB_MAY  = 118;
  const PB_JUNE  = 119;
  const PB_JULY  = 120;
  const PB_AUGUST  = 121;
  const PB_SEPTEMBER  = 122;
  const PB_OCTOBER  = 123;
  const PB_NOVEMBER  = 124;
  const PB_DECEMBER  = 125;
  const PB_LITERAL  = 137;
  const PB_GROUP  = 144;
  const PB_SUM  = 145;
  const PB_AVG  = 146;
  const PB_MIN  = 147;
  const PB_MAX  = 148;
  const PB_SPLIT  = 149;
  const PB_UNGROUP  = 150;
  const PB_RANDOM  = 151;
  const PB_CHANGES  = 152;
  const PB_ARGS  = 154;
  const PB_GEOJSON  = 157;
  const PB_TO_GEOJSON  = 158;
  const PB_POINT  = 159;
  const PB_LINE  = 160;
  const PB_POLYGON  = 161;
  const PB_DISTANCE  = 162;
  const PB_INTERSECTS  = 163;
  const PB_INCLUDES  = 164;
  const PB_CIRCLE  = 165;
  const PB_GET_INTERSECTING  = 166;
  const PB_FILL  = 167;
  const PB_GET_NEAREST  = 168;
}
class Query_QueryType
{
  const PB_START  = 1;
  const PB_CONTINUE  = 2;
  const PB_STOP  = 3;
  const PB_NOREPLY_WAIT  = 4;
}
?>