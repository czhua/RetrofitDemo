package chan.com.retrofitdemo.entity;

import java.util.List;

/**
 * Created by zehua_chen on 2017/8/8.
 */

public class ResultEntity {

    /**
     * status : 1
     * type : 1
     * msg : 查询成功
     * fields : [["id","vip","amount"]]
     * data : [["10025","2","100.00"]]
     */

    private int status;
    private int type;
    private String msg;
    private List<List<String>> fields;
    private List<List<String>> data;

    public int getStatus() {
        return status;
    }

    public void setStatus(int status) {
        this.status = status;
    }

    public int getType() {
        return type;
    }

    public void setType(int type) {
        this.type = type;
    }

    public String getMsg() {
        return msg;
    }

    public void setMsg(String msg) {
        this.msg = msg;
    }

    public List<List<String>> getFields() {
        return fields;
    }

    public void setFields(List<List<String>> fields) {
        this.fields = fields;
    }

    public List<List<String>> getData() {
        return data;
    }

    public void setData(List<List<String>> data) {
        this.data = data;
    }

    @Override
    public String toString() {
        return "ResultEntity{" +
                "status=" + status +
                ", type=" + type +
                ", msg='" + msg + '\'' +
                ", fields=" + fields +
                ", data=" + data +
                '}';
    }
}
