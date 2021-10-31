## POST /sample1

固定のメッセージを返す  

Request  
| name | type | comment |
|:-----|:-----|:--------|
| - | - | - |

Response
| name | type | comment |
|:-----|:-----|:--------|
| msg | string | Hello worldが固定で入る |

## POST /sample2/{name}

設定したメッセージを返す  

Request  
| name | type | comment |
|:-----|:-----|:--------|
| msg | string | msg |

Response
| name | type | comment |
|:-----|:-----|:--------|
| msg | string | {name}さん、{msg} |

## POST /sample3

ユーザ作成  

Request  
| name | type | comment |
|:-----|:-----|:--------|
| name | string | name |

Response
| name | type | comment |
|:-----|:-----|:--------|
| - | - | - |

## POST /sample4

ユーザ情報取得  

Request  
| name | type | comment |
|:-----|:-----|:--------|
| name | string | name |

Response
| name | type | comment |
|:-----|:-----|:--------|
| name | string |  |
| email | string |  |

